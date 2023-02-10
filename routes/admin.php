<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\CategoriesController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\DashboardController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;
use App\Http\Controllers\Admin\auth\AdminAuthenticationController;

Route::prefix('admin')->group(function () {
    Route::name('product.')->group(function () {
        Route::get('add-product', [ProductController::class, 'addProduct'])->name('add');
        Route::post('store-product', [ProductController::class, 'storeProduct'])->name('store');
        Route::get('view-product', [ProductController::class, 'viewProduct'])->name('view');
    });
    Route::name('categories.')->group(function () {
        //routes for category
        Route::post('store-category', [CategoriesController::class, 'storeCategory'])->name('store');
        Route::get('destroy-category/{id}', [CategoriesController::class, 'destroyCategory'])->name('destroy');
        Route::put('update-category/', [CategoriesController::class, 'updateCategory'])->name('update');
        Route::get('categories', [CategoriesController::class, 'viewCategories'])->name('view');

        //routes for brand
        Route::get('destroy-brand/{id}', [CategoriesController::class, 'destroyBrand'])->name('brand.destroy');
        Route::put('update-brand/{id}', [CategoriesController::class, 'updateBrand'])->name('brand.update');
        Route::post('store-brand', [CategoriesController::class, 'storeBrand'])->name('brand.store');
    });
    Route::name('admin.')->controller(DashboardController::class)->group(function () {
        Route::get('/', 'index')->name("dashboard");
        Route::get('login', 'redirectToLogin')->name("redirect.login");
        Route::get('profile', 'profile')->name('profile');
        Route::get('register', 'redirectToRegister')->name("register");
    });
        Route::name('admin.')->controller(AdminAuthenticationController::class)->group(function () {
            Route::post('create-user', 'store')->name('create');
            Route::post('logout', 'destroy')->name("logout");
            Route::post('admin-login', 'login')->name("login");
        });
});
