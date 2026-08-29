<?php

namespace App\Console\Commands;

use App\Models\UserInsight;
use Illuminate\Console\Attributes\Description;
use Illuminate\Console\Attributes\Signature;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

#[Signature('insights:daily-report {--provider=github : Provider filter} {--username=yogawilanda : Target username} {--email= : Email to send report to} {--format=table : Output format (table|json|email)}')]
#[Description('Generate and send daily profile insights report')]
class InsightsDailyReport extends Command
{
    public function handle(): int
    {
        $provider = (string) $this->option('provider');
        $username = (string) $this->option('username');

        // Filter berdasarkan provider & username
        $today = UserInsight::query()
            ->provider($provider)
            ->forUsername($username)
            ->whereDate('captured_at', today())
            ->oldest('captured_at')
            ->get();

        $first = $today->first();
        $last = $today->last();

        if (! $first || ! $last) {
            $this->warn("No data for [{$provider}] @{$username} today.");
            return Command::SUCCESS;
        }

        $stats = [
            'date'                => today()->format('Y-m-d'),
            'provider'            => $provider,
            'username'            => $username,
            'start_views'         => $first->views_count ?? 0,
            'end_views'           => $last->views_count ?? 0,
            'growth'              => ($last->views_count ?? 0) - ($first->views_count ?? 0),
            'total_records'       => $today->count(),
            'successful_captures' => $today->where('is_successful', true)->count(),
            'peak_views'          => $today->max('views_count') ?? 0,
            'average_views'       => round($today->avg('views_count') ?? 0, 2),
        ];

        $format = $this->option('format');

        return match ($format) {
            'json'  => $this->outputJson($stats),
            'email' => $this->sendEmailReport($stats),
            default => $this->outputTable($stats),
        };
    }

    private function outputTable(array $stats): int
    {
        $this->info("📊 Daily Report [{$stats['provider']}] - @{$stats['username']} ({$stats['date']})");
        $this->newLine();

        $this->table(
            ['Metric', 'Value'],
            [
                ['Start Views', number_format($stats['start_views'])],
                ['End Views', number_format($stats['end_views'])],
                ['Growth', ($stats['growth'] >= 0 ? '+' : '') . number_format($stats['growth'])],
                ['Peak Views', number_format($stats['peak_views'])],
                ['Average Views', number_format($stats['average_views'])],
                ['Total Records', $stats['total_records']],
                ['Successful Captures', $stats['successful_captures']],
            ]
        );

        Log::info('Daily insights report generated', $stats);

        return Command::SUCCESS;
    }

    private function outputJson(array $stats): int
    {
        $this->line(json_encode($stats, JSON_PRETTY_PRINT));
        return Command::SUCCESS;
    }

    private function sendEmailReport(array $stats): int
    {
        $email = $this->option('email') ?? config('mail.from.address');

        Mail::html(
            $this->buildEmailHtml($stats),
            function ($message) use ($email, $stats) {
                $message->to($email)
                    ->subject("Daily Insights Report [{$stats['provider']}] - " . $stats['date']);
            }
        );

        $this->info('📧 Email report sent to ' . $email);
        return Command::SUCCESS;
    }

    private function buildEmailHtml(array $stats): string
    {
        return "
            <h1>Daily Insights Report - {$stats['provider']}</h1>
            <p><strong>Username:</strong> @{$stats['username']}</p>
            <p><strong>Date:</strong> {$stats['date']}</p>
            <table style='width:100%;border-collapse:collapse;'>
                <tr style='background:#f5f5f5;'>
                    <th style='padding:10px;border:1px solid #ddd;text-align:left;'>Metric</th>
                    <th style='padding:10px;border:1px solid #ddd;text-align:left;'>Value</th>
                </tr>
                <tr>
                    <td style='padding:10px;border:1px solid #ddd;'>Start Views</td>
                    <td style='padding:10px;border:1px solid #ddd;'>{$stats['start_views']}</td>
                </tr>
                <tr>
                    <td style='padding:10px;border:1px solid #ddd;'>End Views</td>
                    <td style='padding:10px;border:1px solid #ddd;'>{$stats['end_views']}</td>
                </tr>
                <tr>
                    <td style='padding:10px;border:1px solid #ddd;'>Growth</td>
                    <td style='padding:10px;border:1px solid #ddd;'>{$stats['growth']}</td>
                </tr>
            </table>
        ";
    }
}
