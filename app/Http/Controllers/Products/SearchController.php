<?php

namespace App\Http\Controllers\Products;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SearchController extends Controller
{
    public function searchProduct($slug)
    {
        $products = Product::where('slug', 'LIKE', "%$slug%")->get();

        return response()->json([
            'products'=> $products
        ]);
    }
}
