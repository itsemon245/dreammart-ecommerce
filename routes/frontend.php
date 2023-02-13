<?php

use App\Models\Category;
use Illuminate\Support\Facades\Route;
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
        Route::get('add/{id}', 'addFavorite')->name('add');
        Route::get('all/{user_id}', 'viewFavorites')->name('all');
    });
});
