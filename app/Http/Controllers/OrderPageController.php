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
        $orders = Order::where('user_id', auth()->id())->with(['items', 'user', 'items.product'])->orderByRaw("
        CASE
        WHEN status = 'pending' THEN 0 
        WHEN status = 'shipped' THEN 1 
        WHEN status = 'completed' THEN 2
        END 
        ")->get();
        return Inertia::render('Product/Orders', [
            'orders' => $orders
        ]);
    }
    public function cancelOrder($id)
    {
        $order = Order::find($id);
        if ($order->status === 'shipped') {
            return to_route('orders.view')->with('danger', 'Shipped orders cannot be canceled');
        } else {
            $order->delete();
            return to_route('orders.view')->with('success', 'Order canceled');
        }
    }
}
