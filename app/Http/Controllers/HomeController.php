<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Event;
use App\Models\Product;
use Inertia\Inertia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Artisan;

class HomeController extends Controller
{
    public function index()
    {
        $events = Event::get();
        $landingProducts = [];
        foreach ($events as $event) {
            $products = Product::with(['category', 'brand', 'event'])->where('event_id', $event->id)->get();
            array_push($landingProducts, $products);
        }

        return Inertia::render('App', [
            'canLogin' => Route::has('login'),
            'canRegister' => Route::has('register'),
            'laravelVersion' => Application::VERSION,
            'phpVersion' => PHP_VERSION,
            'landingProducts' => $landingProducts
        ]);
    }
    public function artisanCall()
    {
        Artisan::call('migrate:fresh');
        sleep(0.5);
        Artisan::call('db:seed');
        sleep(0.5);
        Artisan::call('optimize');
        sleep(0.5);
        Artisan::call('optimize:clear');
        sleep(0.5);
        Artisan::call('storage:link');
    }
}
