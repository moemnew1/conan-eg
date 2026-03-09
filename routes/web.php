<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use Laravel\Fortify\Features;
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/contact', fn () => inertia('Contactpage'))->name('contact');
Route::get('/about', fn () => inertia('AboutPage'))->name('about');
Route::middleware(['auth', 'verified'])->group(function () {
    Route::inertia('dashboard', 'dashboard')->name('dashboard');
});

require __DIR__.'/settings.php';
