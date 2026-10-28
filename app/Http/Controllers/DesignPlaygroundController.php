<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class DesignPlaygroundController extends Controller
{
    private function previews(): array
    {
        $directory = resource_path('views/pages/asset_raw_html');

        if (!File::isDirectory($directory)) {
            return [];
        }

        $files = collect(File::files($directory))
            ->filter(fn ($file) => strtolower($file->getExtension()) === 'html')
            ->sortBy(fn ($file) => $file->getFilename())
            ->values();

        $usedSlugs = [];
        $previews = [];

        foreach ($files as $file) {
            $filename = $file->getFilename();
            $name = pathinfo($filename, PATHINFO_FILENAME);
            $baseSlug = Str::slug($name);

            if ($baseSlug === '') {
                continue;
            }

            $slug = $baseSlug;
            $suffix = 2;

            while (isset($usedSlugs[$slug])) {
                $slug = $baseSlug.'-'.$suffix++;
            }

            $usedSlugs[$slug] = true;

            $previews[] = [
                'slug' => $slug,
                'name' => Str::of($name)
                    ->replace(['_', '-'], ' ')
                    ->replaceMatches('/\s+/', ' ')
                    ->title()
                    ->toString(),
                'filename' => $filename,
            ];
        }

        return $previews;
    }

    public function index()
    {
        return view('pages.design-playground.index', [
            'previews' => $this->previews(),
        ]);
    }

    public function show(string $slug)
    {
        $preview = collect($this->previews())->firstWhere('slug', $slug);

        abort_if (!$preview, 404);

        return view('pages.design-playground.show', [
            'preview' => $preview,
        ]);
    }

    public function content(string $slug): Response
    {
        $preview = collect($this->previews())->firstWhere('slug', $slug);

        abort_if (!$preview, 404);

        $path = resource_path(
            'views/pages/asset_raw_html/'.$preview['filename']
        );

        abort_unless(File::isFile($path), 404);

        return response(File::get($path), 200, [
            'Content-Type' => 'text/html; charset=UTF-8',
            'X-Content-Type-Options' => 'nosniff',
            'Content-Security-Policy' => implode('; ', [
                'sandbox allow-scripts allow-forms allow-popups',
                "default-src 'self' https: data: blob:",
                "script-src 'self' https: 'unsafe-inline' 'unsafe-eval'",
                "style-src 'self' https: 'unsafe-inline'",
                "img-src 'self' https: data: blob:",
                "font-src 'self' https: data:",
                "connect-src https:",
                "frame-src https:",
                "object-src 'none'",
                "base-uri 'none'",
            ]),
        ]);
    }
}
