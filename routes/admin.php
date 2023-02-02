<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\DashboardController;



Route::prefix('admin')->group(function () {
    Route::name('product.')->group(function () {
        Route::get('add-product', [ProductController::class, 'addProduct'])->name('add');
        Route::get('view-product', [ProductController::class, 'viewProduct'])->name('view');
    });
    Route::name('admin.')->group(function () {
        Route::get('/', [DashboardController::class, 'index'])->name("dashboard");
        Route::get('login', [DashboardController::class, 'redirectToLogin'])->name("login");
        Route::get('profile', [DashboardController::class, 'profile'])->name('profile');
        Route::get('register', [DashboardController::class, 'redirectToRegister'])->name("register");
    });
});
