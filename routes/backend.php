<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\CategoriesController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;
use App\Http\Controllers\Admin\auth\AdminAuthenticationController;
use App\Http\Controllers\Admin\UserController;

Route::middleware(['auth', 'restricted.role:user'])->prefix('admin')->group(function () {

    Route::name('product.')->group(function () {
        Route::middleware('can:product create')->group(function () {
            Route::get('add-product', [ProductController::class, 'addProduct'])->name('add');
            Route::post('store-product', [ProductController::class, 'storeProduct'])->name('store');
        });
        Route::middleware('can:product read')->group(function () {
            Route::get('view-product', [ProductController::class, 'viewProduct'])->name('view');
        });
        Route::middleware('can:product update')->group(function () {
            Route::get('update-product/{id}', [ProductController::class, 'updateProductView'])->name('update.view');
            Route::put('update-product/{id}/', [ProductController::class, 'updateProduct'])->name('update');
        });
        Route::middleware('can:product delete')->group(function () {
            Route::delete('delete-product', [ProductController::class, 'deleteProduct'])->name('delete');
        });
    });


    Route::prefix('role')->name('role.')->controller(RoleController::class)->group(function () {
        Route::middleware('can:role create')->group(function () {
            Route::post('create', 'createRole')->name('create');
        });
        Route::middleware('can:role read')->group(function () {
            Route::get('view', 'viewRoles')->name('view');
            Route::get('add', 'addRoleView')->name('add');
        });
        Route::middleware('can:role update')->group(function () {
            Route::get('edit/{id}', 'editRoleView')->name('edit');
            Route::put('assign/{id}', 'assignRole')->name('assign');
            Route::put('update/{id}', 'updateRole')->name('update');
        });
    });
    Route::put('user/status/{id}', [UserController::class, 'toggleStatus'])->name('toggle.userStatus')->middleware('can:user update');

    Route::post('user/create', [UserController::class, 'createUser'])->name('admin.user.create')->middleware('can:user create');


    Route::prefix('orders')->name('admin.orders.')->controller(OrderController::class)->group(function () {
        Route::get('view', 'viewOrders')->name('view');
        Route::get('view-completed', 'viewCompletedOrders')->name('viewCompleted');
        Route::put('change-status/{id}', 'changeStatus')->name('status');
    });

    Route::name('categories.')->group(function () {
        //routes for category
        Route::middleware('can:category create')->group(function () {
            Route::post('store-category', [CategoriesController::class, 'storeCategory'])->name('store');
        });
        Route::middleware('can:category read')->group(function () {
            Route::get('categories', [CategoriesController::class, 'viewCategories'])->name('view');
        });
        Route::middleware('can:category delete')->group(function () {
            Route::get('destroy-category/{id}', [CategoriesController::class, 'destroyCategory'])->name('destroy');
        });
        Route::middleware('can:category update')->group(function () {
            Route::put('update-category/{id}', [CategoriesController::class, 'updateCategory'])->name('update');
        });



        Route::middleware('can:brand create')->group(function () {
            Route::post('store-brand', [CategoriesController::class, 'storeBrand'])->name('brand.store');
        });
        Route::middleware('can:brand read')->group(function () {
            Route::get('brands', [CategoriesController::class, 'viewBrands'])->name('viewBrands');
        });
        Route::middleware('can:brand update')->group(function () {
            Route::put('update-brand/{id}', [CategoriesController::class, 'updateBrand'])->name('brand.update');
        });
        Route::middleware('can:brand delete')->group(function () {
            Route::get('destroy-brand/{id}', [CategoriesController::class, 'destroyBrand'])->name('brand.destroy');
        });
    });


    Route::name('admin.')->controller(DashboardController::class)->group(function () {
        Route::get('/', 'index')->name("dashboard");
    });
});
