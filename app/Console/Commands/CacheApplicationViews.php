<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use RecursiveDirectoryIterator;
use RecursiveIteratorIterator;
use SplFileInfo;

class CacheApplicationViews extends Command
{
    protected $signature = 'view:cache-app';

    protected $description = 'Compile application Blade views only';

    public function handle(): int
    {
        $directory = resource_path('views');

        if (! is_dir($directory)) {
            $this->error("View directory not found: {$directory}");

            return self::FAILURE;
        }

        $compiler = app('view')
            ->getEngineResolver()
            ->resolve('blade')
            ->getCompiler();

        $files = new RecursiveIteratorIterator(
            new RecursiveDirectoryIterator($directory)
        );

        $count = 0;

        foreach ($files as $file) {
            if (! $file instanceof SplFileInfo || ! $file->isFile()) {
                continue;
            }

            if (! str_ends_with($file->getFilename(), '.blade.php')) {
                continue;
            }

            $compiler->compile($file->getRealPath());
            $count++;
        }

        $this->info("Compiled {$count} application Blade views.");

        return self::SUCCESS;
    }
}