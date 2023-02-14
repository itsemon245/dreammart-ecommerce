<?php

namespace App\Http\Controllers\Products;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class CategoryPageController extends Controller
{

    public function All()
    {

        $products = Product::with('category', 'brand')->where('status', 1)->get();
        return inertia('Categories/Category', [
            'products' => $products
        ]);
    }
    public function viewCategory($id)
    {

        $products = Product::with(['category', 'brand'])->where('category_id', $id)->get();

        return inertia('Categories/Category', [
            'products' => $products
        ]);
    }
}
