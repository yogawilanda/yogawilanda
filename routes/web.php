<?php

use App\Http\Controllers\DesignPlaygroundController;
use App\Livewire\InsightsDashboard;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome')->name('home');

Route::view('/about', 'about')->name('about');

Route::view('/services', 'pages/services')->name('services');

// Public AI design previews
Route::get('/design-playground', [
    DesignPlaygroundController::class,
    'index',
])->name('design-playground.index');

Route::get('/design-playground/preview/{slug}', [
    DesignPlaygroundController::class,
    'show',
])
    ->where('slug', '[a-z0-9-]+')
    ->name('design-playground.preview');

Route::get('/design-playground/content/{slug}', [
    DesignPlaygroundController::class,
    'content',
])
    ->where('slug', '[a-z0-9-]+')
    ->name('design-playground.content');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::view('dashboard', 'dashboard')->name('dashboard');
});

Route::get('/profile-views', InsightsDashboard::class)
    ->name('profile-views');

require __DIR__.'/settings.php';
