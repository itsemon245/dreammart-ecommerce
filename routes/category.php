<?php

use App\Http\Controllers\Products\CategoryPageController;
use Illuminate\Support\Facades\Route;




Route::prefix('category')->controller(CategoryPageController::class)->group(function(){
    Route::name('browse.')->group(function(){
        Route::get('all', 'All')->name('all');
        Route::get('accessories', 'Accessories')->name('accessories');
        Route::get('brands', 'Brands')->name('brands');
        Route::get('shoes', 'Shoes')->name('shoes');
        Route::get('wearables', 'Wearables')->name('wearables');
    });
});
