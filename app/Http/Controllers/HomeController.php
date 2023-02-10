<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Product;
use Inertia\Inertia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Application;

class HomeController extends Controller
{
    public function index()
    {
        $newArrivals = Event::where('name', 'New Arrivals')->first();
        $newArrivals = Product::with(['category', 'brand'])->where('event_id', $newArrivals->id)->get();

        $mostPopular = Event::where('name', 'Most Popular')->first();
        $mostPopular = Product::with(['category', 'brand'])->where('event_id', $mostPopular->id)->get();

        $exclusive = Event::where('name', 'Exclusive')->first();
        $exclusive = Product::with(['category', 'brand'])->where('event_id', $exclusive->id)->get();

        return Inertia::render('App', [
            'canLogin' => Route::has('login'),
            'canRegister' => Route::has('register'),
            'laravelVersion' => Application::VERSION,
            'phpVersion' => PHP_VERSION,
            'landingProducts' => [
                'mostPopular' => $mostPopular,
                'newArrivals' => $newArrivals,
                'exclusive' => $exclusive
            ]
        ]);
    }
}
