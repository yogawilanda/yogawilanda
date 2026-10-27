<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Spatie\Sitemap\SitemapGenerator;

class GenerateSitemap extends Command
{
    protected $signature = 'sitemap:generate';
    protected $description = 'Generate sitemap by crawling public pages';

    public function handle(): int
    {
        $url = rtrim(config('app.url'), '/');

        if (! filter_var($url, FILTER_VALIDATE_URL)) {
            $this->error('APP_URL must be a valid URL.');

            return self::FAILURE;
        }

        SitemapGenerator::create($url)
            ->setConcurrency(1)
            ->shouldCrawl(function (string $url): bool {
                $path = parse_url($url, PHP_URL_PATH) ?? '/';

                return ! preg_match(
                    '#^/(login|register|logout|dashboard|settings|profile-views|forgot-password|reset-password)(/|$)#i',
                    $path
                );
            })
            ->writeToFile(public_path('sitemap.xml'));

        $this->info('Sitemap generated: ' . public_path('sitemap.xml'));

        return self::SUCCESS;
    }
}