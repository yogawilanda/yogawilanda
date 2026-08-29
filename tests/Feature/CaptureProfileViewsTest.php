<?php

namespace Tests\Feature\Console;

use App\Models\UserInsight;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Tests\TestCase;

class CaptureProfileViewsTest extends TestCase
{
    use RefreshDatabase;

    private function mockKomarevSvg(int $views = 3405): string
    {
        return <<<SVG
        <svg xmlns="http://www.w3.org/2000/svg" width="125" height="20">
            <g fill="#fff" text-anchor="middle" font-family="Verdana,Geneva,DejaVu Sans,sans-serif" font-size="110">
                <text x="415" y="140">PROFILE VIEWS</text>
                <text x="985" y="140">{$views}</text>
            </g>
        </svg>
        SVG;
    }

    public function test_successfully_captures_profile_views_from_svg(): void
    {
        Http::fake([
            'komarev.com/*' => Http::response($this->mockKomarevSvg(1500), 200),
        ]);

        $this->artisan('insights:capture --username=yogawilanda')
            ->expectsOutput('Capturing insights for @yogawilanda...')
            ->expectsOutput('✓ Captured: 1,500 views for @yogawilanda')
            ->assertSuccessful();

        $this->assertDatabaseHas('user_insights', [
            'username' => 'yogawilanda',
            'profile_views' => 1500,
            'is_successful' => true,
        ]);
    }

    public function test_handles_http_failure_gracefully(): void
    {
        Http::fake([
            'komarev.com/*' => Http::response('Server Error', 500),
        ]);

        $this->artisan('insights:capture --username=yogawilanda')
            ->assertFailed();

        $this->assertDatabaseHas('user_insights', [
            'username' => 'yogawilanda',
            'profile_views' => null,
            'is_successful' => false,
            'status_code' => 500,
        ]);
    }
}
