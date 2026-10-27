<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;

class GenerateSitemap extends Command
{
    protected $signature = 'sitemap:generate';

    protected $description = 'Generate sitemap from public application routes';

    public function handle(): int
    {
        $baseUrl = rtrim(config('app.url'), '/');

        if (! filter_var($baseUrl, FILTER_VALIDATE_URL)) {
            $this->error('APP_URL must be a valid URL.');

            return self::FAILURE;
        }

        $sitemap = Sitemap::create();

        foreach (['/', '/about', '/services'] as $path) {
            $sitemap->add(
                Url::create($baseUrl . $path)
                    ->setChangeFrequency(Url::CHANGE_FREQUENCY_MONTHLY)
                    ->setPriority($path === '/' ? 1.0 : 0.8)
            );
        }

        $sitemap->writeToFile(public_path('sitemap.xml'));

        $this->info('Sitemap generated: ' . public_path('sitemap.xml'));

        return self::SUCCESS;
    }
}