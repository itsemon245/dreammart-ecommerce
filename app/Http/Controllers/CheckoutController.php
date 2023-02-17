<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\User;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function product(Request $request, $id)
    {
        $cart = Cart::create([
            'user_id' => auth()->id(),
            'product_id' => $id,
            'qty' => $request->qty
        ]);
        $cart = Cart::find($cart->id);
        $cartItem = $cart->with(['user', 'product'])->latest()->first();
        return inertia('Product/CheckoutSingle', [
            'cart' => $cartItem
        ]);
    }
}
