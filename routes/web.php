<?php

use App\Livewire\HomePage;
use Illuminate\Support\Facades\Route;

Route::livewire('/', HomePage::class)->name('home');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::view('dashboard', 'dashboard')->name('dashboard');
});

require __DIR__.'/settings.php';
