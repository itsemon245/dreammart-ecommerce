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
}
