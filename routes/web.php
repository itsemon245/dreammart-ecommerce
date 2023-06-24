<?php

use Inertia\Inertia;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Application;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class, 'index'])->name('home');


Route::prefix('page')->controller(PageController::class)->group(function () {
    Route::name('page.')->group(function () {
        Route::get('/new-arrivals/{id}', 'arrivalsPage')->name('newArrivals');
        Route::get('/popular/{id}', 'popularPage')->name('popular');
        Route::get('/special/{id}', 'spacialPage')->name('spacial');
        Route::get('/about-us/{id}', 'aboutPage')->name('about');
    });
});






//route for linking all the assets
Route::get('assets/{path}', function ($path) {
    return response()->file(public_path("assets/$path"));
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});




require __DIR__ . '/auth.php';
require __DIR__ . '/backend.php';
require __DIR__ . '/frontend.php';
