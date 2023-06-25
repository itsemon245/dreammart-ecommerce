<?php

namespace App\Http\Controllers;

use Stripe\Stripe;
use App\Models\Cart;
use App\Models\User;
use Inertia\Inertia;
use App\Models\Order;
use App\Models\OrderItems;
use Illuminate\Http\Request;
use Stripe\Checkout\Session;

class CheckoutController extends Controller
{
    public function product(Request $request, $id)
    {
        $cart = Cart::with(['user', 'product'])->find($request->cartId);
        // dd($cart);
        if (!$cart) {
            $cart = Cart::create([
                'user_id' => auth()->id(),
                'product_id' => $id,
                'qty' => $request->qty
            ]);
            $cart = Cart::with(['user', 'product'])->find($cart->id);
        }

        return inertia('Product/CheckoutSingle', [
            'cart' => $cart
        ]);
    }

    public function confirmProduct(Request $request)
    {
        
        // creates a new order
        $order = new Order();
        $order->user_id = auth()->id();
        $order->status = 'pending';
        $totalPrice = $request->cartItem['product']['price'] * $request->cartItem['qty'] + $request->shipping;
        $order->total_price = $totalPrice;
        $order->save();
        // dd($order);

        $orderItem = new OrderItems();
        $orderItem->order_id = $order->id;
        $orderItem->product_id = $request->cartItem['product']['id'];
        $orderItem->qty = $request->cartItem['qty'];
        $orderItem->price = $request->cartItem['product']['price'];
        $orderItem->save();

        //delete the ordered item from cart
        $cartId = $request->cartItem['id'];
        $cartItem = Cart::find($cartId);
        $cartItem->delete();



        $orders = Order::where('user_id', auth()->id())->with(['items', 'user', 'items.product'])->latest()->get();
        return to_route('cart.all')->with('success', "Your order is on the way");
    }
}
