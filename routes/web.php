<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\CheckoutController;

use App\Http\Controllers\Admin\BankSettingController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\QuoteRequestController;
use App\Http\Controllers\Admin\OrderController as AdminOrderController;

use App\Http\Controllers\Front\ProductController as FrontProductController;
use App\Http\Controllers\Front\QuoteRequestController as FrontQuoteRequestController;
use App\Http\Controllers\Front\OrderController as FrontOrderController;

Route::get('/', HomeController::class)->name('home');

Route::get('/anhaenger', [FrontProductController::class, 'index'])
    ->name('products');

Route::get('/produkt/{product:slug}', [FrontProductController::class, 'show'])
    ->name('product.show');

Route::get('/bestellen/{product:slug}', [FrontOrderController::class, 'create'])
    ->name('orders.create');

Route::post('/bestellen/{product:slug}', [FrontOrderController::class, 'store'])
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

        Route::resource('orders', AdminOrderController::class);

        Route::resource('quotes', QuoteRequestController::class);

    });

Route::view('/bestellung-erfolgreich', 'orders.success')
    ->name('orders.success');

require __DIR__.'/auth.php';

Route::view('/impressum', 'impressum')->name('impressum');

Route::view('/datenschutz', 'datenschutz')->name('datenschutz');

Route::view('/agb', 'agb')->name('agb');

Route::view('/widerruf', 'widerruf')->name('widerruf');

Route::view('/versand', 'versand')->name('versand');

Route::view('/zahlung', 'zahlung')->name('zahlung');

Route::view('/garantie', 'garantie')->name('garantie');

Route::view('/faq', 'faq')->name('faq');


Route::get('/checkout/{product}', [CheckoutController::class, 'show'])
    ->name('checkout.show');

Route::post('/checkout/{product}', [CheckoutController::class, 'store'])
    ->name('checkout.store');

Route::get('/payment/{order}', [CheckoutController::class, 'payment'])
    ->name('payment.show');


Route::prefix('admin')->group(function () {

    Route::get('/bank-settings', [BankSettingController::class, 'edit'])
        ->name('admin.bank.edit');

    Route::post('/bank-settings', [BankSettingController::class, 'update'])
        ->name('admin.bank.update');

});



    Route::post('/payment/{order}/upload',
    [CheckoutController::class,'uploadProof'])
    ->name('payment.upload');

