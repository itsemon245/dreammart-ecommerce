<?php

namespace App\Http\Controllers\Products;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Favorite;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Inertia\Inertia;

class ProductPageController extends Controller
{
    public function viewProduct($id)
    {
        $prod = Product::find($id);

        //check product favorite state
        if ($prod->isFavorited()) {
            $isFavorite = true;
        } else {
            $isFavorite = false;
        }
        //check product cart state
        if ($prod->isCarted()) {
            $isCarted = true;
        } else {
            $isCarted = false;
        }

        $product = Product::with(['category', 'brand'])->find($id);
        return Inertia::render('Product/Product', [
            'product' => $product,
            'isFavorite' => $isFavorite,
            'isCarted' => $isCarted
        ]);
    }

    public function toggleFavorite($id)
    {

        $product = Product::find($id);
        if ($product->isFavorited()) {
            $delete = Favorite::where('user_id', auth()->user()->id)->where('product_id', $id)->delete();
            return json_encode(false);
        } else {
            $favorite = Favorite::create([
                'user_id' => auth()->user()->id,
                'product_id' => $id,
            ]);
            $product->favorite_id = $favorite->id;
            $product->save();
            return json_encode(true);
        }
    }
    public function toggleCart($id, $qty)
    {

        $product = Product::find($id);
        if ($product->isCarted()) {
            $delete = Cart::where('user_id', auth()->user()->id)->where('product_id', $id)->delete();
            return json_encode(false);
        } else {
            $cart = Cart::create([
                'user_id' => auth()->user()->id,
                'product_id' => $id,
                'qty' => $qty
            ]);
            $product->cart_id = $cart->id;
            $product->save();
            return json_encode(true);
        }
    }

    public function destroyCart($id)
    {

        $delete = Cart::find($id)->delete();
        return back()->with('success', 'Removed from cart');
    }
    public function viewFavorites()
    {
        if (auth()->user()) {
            $user = User::find(auth()->id());
            $favorites = $user->products()->with(['category', 'brand'])->get();
            $carts = $user->cartProducts()->with(['category', 'brand', 'carts'])->get();
        } else {
            $carts = false;
            $favorites = false;
        }

        return Inertia::render('Product/Favorites', [
            'favorites' => $favorites,
            'carts' => $carts
        ]);
    }
    public function viewCarts()
    {
        $user = User::find(auth()->id());
        $carts = Cart::with(['product', 'product.brand', 'product.category'])->where('user_id', $user->id)->latest()->get();
        // dd($carts);
        // $carts = $user->cartProducts()->with(['category', 'brand', 'carts'])->get();
        return Inertia::render('Product/Cart', [
            'carts' => $carts
        ]);
    }
}
