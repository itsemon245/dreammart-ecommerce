<?php

use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\OrderPageController;
use App\Http\Controllers\Products\SearchController;
use App\Http\Controllers\Profile\ProfilePageController;
use App\Http\Controllers\Products\ProductPageController;
use App\Http\Controllers\Products\CategoryPageController;


//routes for category
Route::prefix('category')->controller(CategoryPageController::class)->group(function () {
    Route::name('browse.')->group(function () {
        Route::get('all', 'All')->name('all');
        Route::get('view/{id}', 'viewCategory')->name('category');
    });
});
//routes for product
Route::prefix('product')->controller(ProductPageController::class)->group(function () {
    Route::name('browse.')->group(function () {
        Route::get('view/{id}', 'viewProduct')->name('product');
    });
    Route::prefix('favorite')->name('favorite.')->group(function () {
        Route::get('toggle/{id}', 'toggleFavorite')->name('toggle');
        Route::get('all', 'viewFavorites')->name('all');
    });
    Route::prefix('cart')->name('cart.')->group(function () {
        Route::get('toggle/{id}/{qty}', 'toggleCart')->name('toggle');
        Route::get('destroy/{id}', 'destroyCart')->name('destroy');
        Route::get('all', 'viewCarts')->name('all');
    });
});
//routes for profile
Route::prefix('profile')->controller(ProfilePageController::class)->group(function () {
    Route::name('profile.')->group(function () {
        Route::get('view', 'viewProfile')->name('view');
        Route::get('settings', 'viewSettings')->name('settings');
    });
});
//route for orders
Route::prefix('orders')->controller(OrderPageController::class)->group(function () {
    Route::name('orders.')->group(function () {
        Route::get('view', 'viewOrders')->name('view');
    });
    Route::delete('cancel/{id}', 'cancelOrder')->name('order.cancel');
});

Route::middleware('auth')->group(function () {
    Route::prefix('checkout')->name('checkout.')->controller(CheckoutController::class)->group(function () {
        Route::post('product/{id}', 'product')->name('product');
        Route::post('prodcut/confirm', 'confirmProduct')->name('product.confirm');
    });
});



//route for search
Route::get('/search-product/{name}', [SearchController::class, 'searchProduct'])->name('product.search');
