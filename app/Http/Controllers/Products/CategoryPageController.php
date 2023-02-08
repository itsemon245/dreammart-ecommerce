<?php

namespace App\Http\Controllers\Products;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class CategoryPageController extends Controller
{

    /**
     * Fetch products for the specified model
     * @return array
     */
    public function fetchProducts($category)
    {
        $category = Category::where('name', $category)->first();
        $products = Product::with('category', 'brand')->where('category_id', $category->id)->where('status', 1)->get();
        return $products;
    }

    public function All()
    {

        $products = Product::with('category', 'brand')->where('status', 1)->get();
        return inertia('Categories/All',[
            'products' => $products
        ]);
    }
    public function Accessories()
    {

        $products = $this->fetchProducts('Accessories');

        return inertia('Categories/Accessories',[
            'products' => $products
        ]);
    }


    public function Shoes()
    {

        $products = $this->fetchProducts('Shoes');
        return inertia('Categories/Shoes',[
            'products' => $products
        ]);
    }


    public function Wearables()
    {

        $products = $this->fetchProducts('Wearables');
        return inertia('Categories/Wearables',[
            'products' => $products
        ]);
    }
}
