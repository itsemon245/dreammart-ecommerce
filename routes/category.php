<?php

use App\Http\Controllers\Products\CategoryPageController;
use App\Models\Category;
use Illuminate\Support\Facades\Route;



Route::prefix('category')->controller(CategoryPageController::class)->group(function(){
    Route::name('browse.')->group(function(){
        Route::get('all', 'All')->name('all');
        Route::get('category/{id}', 'viewCategory')->name('category');
    });
});
