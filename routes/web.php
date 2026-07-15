<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\QuoteRequestController;

use App\Http\Controllers\Front\ProductController as FrontProductController;
use App\Http\Controllers\Front\OrderController;
use App\Http\Controllers\Front\QuoteRequestController as FrontQuoteRequestController;

Route::get('/', HomeController::class)->name('home');

Route::get('/anhaenger', [FrontProductController::class, 'index'])
    ->name('products');

Route::get('/produkt/{product:slug}', [FrontProductController::class, 'show'])
    ->name('product.show');

Route::get('/bestellen/{product:slug}', [OrderController::class, 'create'])
    ->name('orders.create');

Route::post('/bestellen/{product:slug}', [OrderController::class, 'store'])
    ->name('orders.store');

Route::get('/kontakt', [FrontQuoteRequestController::class, 'create'])
    ->name('contact');

Route::post('/kontakt', [FrontQuoteRequestController::class, 'store'])
    ->name('contact.store');

Route::view('/ueber-uns', 'about.index')
    ->name('about');

Route::middleware(['auth'])
    ->prefix('admin')
    ->name('admin.')
    ->group(function () {

        Route::get('/', DashboardController::class)
            ->name('dashboard');

        Route::resource('categories', CategoryController::class);

        Route::resource('products', ProductController::class);

        Route::resource('orders', \App\Http\Controllers\Admin\OrderController::class);

        Route::resource('quotes', QuoteRequestController::class);

    });

Route::view('/bestellung-erfolgreich', 'orders.success')
    ->name('orders.success');

require __DIR__.'/auth.php';