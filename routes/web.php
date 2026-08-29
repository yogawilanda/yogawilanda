<?php

use App\Livewire\InsightsDashboard;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome')->name('home');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::view('dashboard', 'dashboard')->name('dashboard');
});

Route::get('/profile-views', InsightsDashboard::class)->name('profile-views');
require __DIR__.'/settings.php';
