<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\CategoriesController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;
use App\Http\Controllers\Admin\auth\AdminAuthenticationController;

Route::prefix('admin')->group(function () {
    Route::name('product.')->group(function () {
        Route::get('add-product', [ProductController::class, 'addProduct'])->name('add');
        Route::post('store-product', [ProductController::class, 'storeProduct'])->name('store');
        Route::get('view-product', [ProductController::class, 'viewProduct'])->name('view');
        Route::delete('delete-product', [ProductController::class, 'deleteProduct'])->name('delete');
        Route::get('update-product/{id}', [ProductController::class, 'updateProductView'])->name('update.view');
        Route::put('update-product/{id}/', [ProductController::class, 'updateProduct'])->name('update');
    });


    Route::prefix('role')->name('role.')->controller(RoleController::class)->group(function () {
        Route::get('view', 'viewRoles')->name('view');
        Route::get('add', 'addRoleView')->name('add');
        Route::get('edit/{id}', 'editRoleView')->name('edit');
        Route::post('create', 'createRole')->name('create');
        Route::put('update/{id}', 'updateRole')->name('update');
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
        Route::get('profile', 'profile')->name('profile');
    });
});
