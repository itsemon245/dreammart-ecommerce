<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function addProduct()
    {
        return view('backend.views.addProduct');
    }
    public function viewProduct()
    {
        $products = Product::with(['category', 'brand'])->latest()->get();
        return view('backend.views.viewProduct', compact('products'));
    }
}
