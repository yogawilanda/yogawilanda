<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Schedule;

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');

// Capture profile insights hourly
Schedule::command('insights:capture --provider=github --username=yogawilanda')
    ->hourly();

// Generate daily insights report at 23:59
Schedule::command('insights:daily-report --provider=github --username=yogawilanda')
    ->dailyAt('23:59')
    ->emailOutputOnFailure(config('mail.from.address'));

// Clean up old records (pruning)
Schedule::command('model:prune')
    ->daily();

// Heartbeat / Health check
Schedule::call(function () {
    Log::info('Scheduler is running');
})->everyMinute();
