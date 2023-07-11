<?php

namespace App\Http\Controllers\api;

use Stripe\Stripe;
use App\Models\Cart;
use App\Models\User;
use App\Models\Order;
use Stripe\StripeClient;
use App\Models\OrderItems;
use Illuminate\Http\Request;
use Stripe\Checkout\Session;
use App\Http\Controllers\Controller;

class StripeController extends Controller
{
    public function __construct()
    {
        // Stripe::setApiKey(env('STRIPE_SECRET'));
    }


    function productCheckout(Request $request)
    {
    }


    function checkout(Request $request)
    {
        // dd($request);
        // get products from user cart
        $products = User::where('id', auth()->id())
            ->with('cartProducts', 'cartProducts.carts')
            ->first()->cartProducts;

        // create an order instance with unpaid status and total price of 0;
        $totalPrice = 0;
        $order = new Order();
        $order->status = 'unpaid';
        $order->user_id = auth()->id();
        $order->total_price = $totalPrice;
        $order->save();
        $items = [];
        /** 
         * set products in key, value pairs of
         * stripe_price => product->qty
         * in the items array */
        foreach ($products as $product) {
            $item = ["$product->stripe_price_id" => $product->carts[0]->qty];
            $items = array_merge($items, $item);

            // increment total price for order
            $totalPrice += $product->price * $product->carts[0]->qty;
            // create orderItem for each product
            $orderItem = OrderItems::create([
                'order_id' => $order->id,
                'product_id' => $product->id,
                'price' => $product->price,
                'qty' => $product->carts[0]->qty,
            ]);
            $delete = Cart::find($product->carts[0]->id)->delete();
        }

        $order->total_price = $totalPrice;
        $order->save();
        // return cahier's product checkout method
        return $request->user()->checkout(
            $items,
            [
                'success_url' => route('checkout.success') . "?order_id=$order->id&session_id={CHECKOUT_SESSION_ID}",
                'cancel_url' => route('checkout.cancel'),
            ],
        );
    }



    function success(Request $request)
    {
        $checkoutSession = $request->user()->stripe()->checkout->sessions->retrieve($request->get('session_id'));
        dd($checkoutSession);
        $order = Order::with(['items'])->find($request->order_id);
        $order->status = 'paid';
        $order->update();

        return inertia('');
    }
    function cancel()
    {
    }
    function webhook()
    {
        // $order= Order::with(['orderItems'])->find($request->order_id);
        // $order->status = 'paid';
        // $order->update();
    }
}
