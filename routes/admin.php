<?php

use App\Http\Controllers\Admin\auth\AdminAuthenticationController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\DashboardController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

Route::prefix('admin')->group(function () {
    Route::name('product.')->group(function () {
        Route::get('add-product', [ProductController::class, 'addProduct'])->name('add');
        Route::get('view-product', [ProductController::class, 'viewProduct'])->name('view');
    });
    Route::name('categories.')->group(function () {
        Route::post('add-category', [CategoriesController::class, 'addCategory'])->name('add');
        Route::get('categories', [CategoriesController::class, 'viewCategories'])->name('view');
    });
    Route::name('admin.')->controller(DashboardController::class)->group(function () {
        Route::get('/', 'index')->name("dashboard");
        Route::get('login', 'redirectToLogin')->name("login");
        Route::get('profile', 'profile')->name('profile');
        Route::get('register', 'redirectToRegister')->name("register");
    });
    Route::name('admin.')->controller(AdminAuthenticationController::class)->group(function () {
        Route::post('create-user', 'store')->name('create');
    });
});
