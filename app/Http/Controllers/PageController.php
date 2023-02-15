<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function arrivalsPage($id)
    {
        $products = Product::with(['category', 'brand'])->where('event_id', $id)->get();

        return inertia('NewArrivals', [
            'products' => $products
        ]);
    }

    public function popularPage($id)
    {
        $products = Product::with(['category', 'brand'])->where('event_id', $id)->get();

        return inertia('Popular', [
            'products' => $products
        ]);
    }
    public function spacialPage($id)
    {
        $products = Product::with(['category', 'brand'])->where('event_id', $id)->get();

        return inertia('Special', [
            'products' => $products
        ]);
    }
    public function aboutPage($id)
    {
        return inertia('AboutUs');
    }
}
