<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\DashboardController;


Route::get('/admin', [DashboardController::class, 'index'])->name("admin.dashboard");
Route::get('/admin-login', [DashboardController::class, 'redirectToLogin'])->name("admin.login");

Route::prefix('admin')->group(function () {
    Route::name('product.')->group(function () {
        Route::get('add-product', [ProductController::class, 'addProduct'])->name('add');
        Route::get('view-product', [ProductController::class, 'viewProduct'])->name('view');
    });
    Route::name('admin.')->get('profile', [DashboardController::class, 'profile'])->name('profile');
});
