<?php

namespace App\Console\Commands;

use App\Models\UserInsight;
use App\Services\Insights\InsightManager;
use Illuminate\Console\Attributes\Description;
use Illuminate\Console\Attributes\Signature;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;
use App\Events\UserInsightUpdated;

#[Signature('insights:capture {--username=yogawilanda : Target username to track} {--provider=github : Insight provider driver}')]
#[Description('Capture profile metric insights from a specified provider and store them in the database')]
class CaptureProfileInsights extends Command
{
    /**
     * Execute the console command.
     */
    public function handle(InsightManager $manager): int
    {
        $username = (string) $this->option('username');
        $providerName = (string) $this->option('provider');

        $this->info("Capturing [{$providerName}] insights for @{$username}...");

        try {
            // 1. Delegasikan proses fetching & parsing ke Service Layer (Driver Pattern)
            $provider = $manager->make($providerName);
            $viewsCount = $provider->capture($username);

            // 2. Simpan snapshot record ke Database
            $insight = UserInsight::create([
                'provider'      => $providerName,
                'username'      => $username,
                'views_count'   => $viewsCount,
                'raw_response'  => $provider->getRawResponse(),
                'source_url'    => $provider->getSourceUrl($username),
                'status_code'   => $provider->getStatusCode(),
                'is_successful' => $viewsCount !== null,
                'captured_at'   => now(),
            ]);

            if ($viewsCount === null) {
                $this->warn("⚠ Captured record, but failed to parse metric count from {$providerName}.");
                return Command::FAILURE;
            }

            $this->info("✓ Captured: " . number_format($viewsCount) . " metrics/views for @{$username}");

            // 3. Evaluasi growth & spike log
            $this->evaluateGrowth($insight, $providerName, $username, $viewsCount);

            // 4. Broadcast event ke WebSocket (Livewire)
            UserInsightUpdated::dispatch($username);

            return Command::SUCCESS;
        } catch (\Throwable $e) {
            $this->error('✗ Failed: ' . $e->getMessage());

            UserInsight::create([
                'provider'      => $providerName,
                'username'      => $username,
                'views_count'   => null,
                'raw_response'  => 'ERROR: ' . $e->getMessage(),
                'source_url'    => null,
                'status_code'   => 500,
                'is_successful' => false,
                'captured_at'   => now(),
            ]);

            return Command::FAILURE;
        }
    }

    /**
     * Calculate metric growth and log significant spikes.
     */
    private function evaluateGrowth(UserInsight $currentInsight, string $provider, string $username, int $currentValue): void
    {
        $previous = UserInsight::query()
            ->provider($provider)
            ->forUsername($username)
            ->where('id', '!=', $currentInsight->id)
            ->successful()
            ->latestFirst()
            ->first();

        if (! $previous) {
            return;
        }

        $diff = $currentValue - $previous->views_count;
        $change = $diff >= 0 ? '+' . $diff : (string) $diff;

        $this->line("   📈 Change: {$change} views since last capture");

        if ($diff > 50) {
            $this->warn("   ⚡ Significant spike detected! +{$diff} views");
            Log::info('Significant view spike detected', [
                'provider' => $provider,
                'username' => $username,
                'current'  => $currentValue,
                'previous' => $previous->views_count,
                'increase' => $diff,
            ]);
        }
    }
}
