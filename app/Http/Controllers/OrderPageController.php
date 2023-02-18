<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderPageController extends Controller
{
    //
    public function viewOrders()
    {
        $orders = Order::where('user_id', auth()->id())->with(['items', 'user', 'items.product'])->latest()->get();
        return Inertia::render('Product/Orders', [
            'orders' => $orders
        ]);
    }
}
