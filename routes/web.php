<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\InquiryController;
use Illuminate\Support\Facades\Route;

// ── Redirect bare / to /en ────────────────────────────────────────────────────
Route::get('/', fn () => redirect('/en'))->name('home'); // keeps 'home' for auth layouts

// ── English prefix /en ────────────────────────────────────────────────────────
Route::prefix('en')->middleware('set.locale')->name('en.')->group(function () {
    Route::get('/',          [HomeController::class, 'index'])->name('home');
    Route::get('/products',  [HomeController::class, 'products'])->name('products');
    Route::get('/about',     fn () => inertia('AboutPage'))->name('about');
    Route::get('/contact',   fn () => inertia('Contactpage'))->name('contact');
});

// ── Arabic prefix /ar ─────────────────────────────────────────────────────────
Route::prefix('ar')->middleware('set.locale')->name('ar.')->group(function () {
    Route::get('/',          [HomeController::class, 'index'])->name('home');
    Route::get('/products',  [HomeController::class, 'products'])->name('products');
    Route::get('/about',     fn () => inertia('AboutPage'))->name('about');
    Route::get('/contact',   fn () => inertia('Contactpage'))->name('contact');
});

// ── Authenticated routes ──────────────────────────────────────────────────────
Route::middleware(['auth', 'verified'])->group(function () {
    Route::inertia('dashboard', 'dashboard')->name('dashboard');
});
Route::post('/inquiries', [InquiryController::class, 'store'])->name('inquiries.store');
require __DIR__.'/settings.php';