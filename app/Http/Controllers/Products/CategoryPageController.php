<?php

namespace App\Http\Controllers\Products;

use App\Models\User;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Model;

class CategoryPageController extends Controller
{

    public function All()
    {
        if (auth()->user()) {
            $user = User::find(auth()->id());
            $favorites = $user->products()->with(['category', 'brand'])->get();
            $carts = $user->cartProducts()->with(['category', 'brand', 'carts'])->get();
        }else{
            $carts = false;
            $favorites = false;
        }
        $products = Product::with('category', 'brand')->where('status', 1)->get();
        return inertia('Categories/Category', [
            'products' => $products,
            'carts' => $carts,
            'favorites' => $favorites
        ]);
    }
    public function viewCategory($id)
    {

        $user = User::find(auth()->id());
        $favorites = $user->products()->with(['category', 'brand'])->get();
        $carts = $user->cartProducts()->with(['category', 'brand', 'carts'])->get();
        $products = Product::with(['category', 'brand'])->where('category_id', $id)->get();

        return inertia('Categories/Category', [
            'products' => $products,
            'carts' => $carts,
            'favorites' => $favorites
        ]);
    }
}
