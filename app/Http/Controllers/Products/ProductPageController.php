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
            return json_encode('deleted');
        } else {
            $favorite = Favorite::create([
                'user_id' => auth()->user()->id,
                'product_id' => $id,
            ]);
            $product->favorite_id = $favorite->id;
            $product->save();
            return json_encode('added');
        }
    }
    public function toggleCart($id, $qty)
    {

        $product = Product::find($id);
        if ($product->isCarted()) {
            $delete = Cart::where('user_id', auth()->user()->id)->where('product_id', $id)->delete();
            return json_encode('deleted');
        } else {
            $cart = Cart::create([
                'user_id' => auth()->user()->id,
                'product_id' => $id,
                'qty' => $qty
            ]);
            $product->cart_id = $cart->id;
            $product->save();
            return json_encode($cart);
        }
    }

    public function viewFavorites()
    {
        $user = User::find(auth()->id());
        $favorites = $user->products()->with(['category', 'brand'])->get();

        return Inertia::render('Product/Favorites', [
            'favorites' => $favorites
        ]);
    }
    public function viewCarts()
    {
        $user = User::find(auth()->id());
        $carts = $user->cartProducts()->with(['category', 'brand'])->get();

        return Inertia::render('Orders/Cart', [
            'carts' => $carts
        ]);
    }
}
