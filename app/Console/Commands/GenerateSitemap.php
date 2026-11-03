<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;

class GenerateSitemap extends Command
{
    protected $signature = 'sitemap:generate';

    protected $description = 'Generate sitemap from public application pages';

    public function handle(): int
    {
        $baseUrl = rtrim(config('app.url'), '/');

        if (! filter_var($baseUrl, FILTER_VALIDATE_URL)) {
            $this->error('APP_URL must be a valid URL.');

            return self::FAILURE;
        }

        $pages = [
            '/' => 1.0,
            '/about' => 0.7,
            '/services' => 0.9,

            // Service landing pages
            '/jasa-pembuatan-website-surabaya' => 0.8,
            '/jasa-pembuatan-company-profile' => 0.8,
            '/jasa-pembuatan-toko-online' => 0.8,
            '/jasa-pembuatan-landing-page' => 0.8,
            '/jasa-pembuatan-website-umkm' => 0.8,
            '/jasa-pembuatan-website-katalog-produk' => 0.8,
            '/jasa-pembuatan-web-application' => 0.8,
            '/website-jual-beli-mobil-bekas' => 0.8,
            '/aplikasi-kasir-bengkel' => 0.8,
            '/website-bimbingan-belajar' => 0.8,
            '/jasa-perbaikan-website' => 0.8,

            // Design showcase
            '/contoh-desain' => 0.7,
        ];

        $sitemap = Sitemap::create();

        foreach ($pages as $path => $priority) {
            $sitemap->add(
                Url::create($baseUrl . $path)
                    ->setChangeFrequency(Url::CHANGE_FREQUENCY_MONTHLY)
                    ->setPriority($priority)
            );
        }

        $sitemap->writeToFile(public_path('sitemap.xml'));

        $this->info('Sitemap generated successfully.');
        $this->info('Total URLs: ' . count($pages));
        $this->info('Location: ' . public_path('sitemap.xml'));

        return self::SUCCESS;
    }
}