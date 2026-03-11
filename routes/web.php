<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\InquiryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SitemapController;

// ── Redirect bare / to /en ────────────────────────────────────────────────────
Route::get('/', fn () => redirect('/en'))->name('home');

// ── English prefix /en ───────────────────────────────────────────────────────
Route::prefix('en')->middleware('set.locale')->name('en.')->group(function () {
    Route::get('/',                                    [HomeController::class, 'index'])->name('home');
    Route::get('/products',                            [HomeController::class, 'products'])->name('products');
    Route::get('/products/{groupSlug}',                [HomeController::class, 'products'])->name('products.group');
    Route::get('/products/{groupSlug}/{productSlug}',  [HomeController::class, 'product'])->name('products.show');
    Route::get('/about',                               fn () => inertia('AboutPage'))->name('about');
    Route::get('/contact',                             fn () => inertia('Contactpage'))->name('contact');
    Route::get('/distributors',                        [HomeController::class, 'distributors'])->name('distributors');
    Route::get('/warranty',                            fn () => inertia('WarrantyPage'))->name('warranty');
});

// ── Arabic prefix /ar ────────────────────────────────────────────────────────
Route::prefix('ar')->middleware('set.locale')->name('ar.')->group(function () {
    Route::get('/',                                    [HomeController::class, 'index'])->name('home');
    Route::get('/products',                            [HomeController::class, 'products'])->name('products');
    Route::get('/products/{groupSlug}',                [HomeController::class, 'products'])->name('products.group');
    Route::get('/products/{groupSlug}/{productSlug}',  [HomeController::class, 'product'])->name('products.show');
    Route::get('/about',                               fn () => inertia('AboutPage'))->name('about');
    Route::get('/contact',                             fn () => inertia('Contactpage'))->name('contact');
    Route::get('/distributors',                        [HomeController::class, 'distributors'])->name('distributors');
    Route::get('/warranty',                            fn () => inertia('WarrantyPage'))->name('warranty');
});

// ── Authenticated routes ──────────────────────────────────────────────────────
Route::middleware(['auth', 'verified'])->group(function () {
    Route::inertia('dashboard', 'dashboard')->name('dashboard');
});

Route::post('/inquiries', [InquiryController::class, 'store'])->name('inquiries.store');
Route::get('/sitemap.xml', [SitemapController::class, 'index']);

require __DIR__.'/settings.php';