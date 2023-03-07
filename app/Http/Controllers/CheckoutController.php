<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use App\Models\OrderItems;
use App\Models\User;
use Illuminate\Http\Request;
use Inertia\Inertia;

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

    public function confirmProduct(Request $request)
    {
        $order = new Order();
        $order->user_id = auth()->id();
        $order->status = 'pending';
        $totlPrice = $request->cartItem['product']['price'] * $request->cartItem['qty'] + $request->shipping;
        $order->total_price = $totlPrice;
        $order->save();
        // dd($order);
        $orderItem = new OrderItems();
        $orderItem->order_id = $order->id;
        $orderItem->product_id = $request->cartItem['product']['id'];
        $orderItem->qty = $request->cartItem['qty'];
        $orderItem->price = $request->cartItem['product']['price'];
        $orderItem->save();

        $deleteCartItem = Cart::find($request->cartItem['id'])->delete();

        $orders = Order::where('user_id', auth()->id())->with(['items', 'user', 'items.product'])->latest()->get();
        return to_route('orders.view', [
            'orders' => $orders
        ])->with('success', "Your order is on the way");
    }
}
