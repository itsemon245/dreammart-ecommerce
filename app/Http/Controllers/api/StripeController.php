<?php

namespace App\Http\Controllers\api;

use Stripe\Stripe;
use App\Models\User;
use Stripe\StripeClient;
use Illuminate\Http\Request;
use Stripe\Checkout\Session;
use App\Http\Controllers\Controller;

class StripeController extends Controller
{
    public function __construct() {
        // Stripe::setApiKey(env('STRIPE_SECRET'));
    }


    function productCheckout(Request $request) {
    }


    function checkout(Request $request) {
        $products = User::where('id', auth()->id())->with('cartProducts', 'cartProducts.carts')->first()->cartProducts;
        // dd($products);
        $items = [];
        foreach ($products as $product) {
            $item = ["$product->stripe_price_id" => $product->carts[0]->qty];
            $items = array_merge($items, $item);
        }
        // dd($items);
        return $request->user()->checkout($items);
    }
    function success() {
        // $product = $request->cartItem['product'];
        // $session = Session::create([
        //     'line_items' => [[
        //         'price_data'=>[
        //             'currency' => 'usd',
        //             'product_data' =>[
        //                 'name'=> $product['name'],
        //             ],
        //             'unit_amount'=> $product['price'] * 100,
        //         ],
        //         'quantity' =>  $request->cartItem['qty'],
        //     ]],
        //     'mode' => 'payment',
        //     'success_url' => url('/success'),
        //     'cancel_url' => url('/cancel')
        // ]);
    }
    function cancel() {
        // $product = $request->cartItem['product'];
        // $session = Session::create([
        //     'line_items' => [[
        //         'price_data'=>[
        //             'currency' => 'usd',
        //             'product_data' =>[
        //                 'name'=> $product['name'],
        //             ],
        //             'unit_amount'=> $product['price'] * 100,
        //         ],
        //         'quantity' =>  $request->cartItem['qty'],
        //     ]],
        //     'mode' => 'payment',
        //     'success_url' => url('/success'),
        //     'cancel_url' => url('/cancel')
        // ]);
    }
    function webhook() {
        // $product = $request->cartItem['product'];
        // $session = Session::create([
        //     'line_items' => [[
        //         'price_data'=>[
        //             'currency' => 'usd',
        //             'product_data' =>[
        //                 'name'=> $product['name'],
        //             ],
        //             'unit_amount'=> $product['price'] * 100,
        //         ],
        //         'quantity' =>  $request->cartItem['qty'],
        //     ]],
        //     'mode' => 'payment',
        //     'success_url' => url('/success'),
        //     'cancel_url' => url('/cancel')
        // ]);
    }
}
