<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\OrderItems;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function viewOrders()
    {
        $orders = Order::with(['user', 'items', 'items.product'])
            ->whereIn('status', ['pending', 'shipped'])->get();
        // dd($orders);
        return view('backend.views.viewPendingOrders', compact('orders'));
    }

    public function viewCompletedOrders()
    {
        $orders = Order::with(['user', 'items', 'items.product'])
            ->where('status', 'completed')->get();
        // dd($orders);
        return view('backend.views.viewOrders', compact('orders'));
    }

    public function changeStatus(Request $request, $id)
    {
        // dd($id);
        $isCompleted = $request->status == 'completed';
        $order = Order::find($id);
        $order->status = $request->status;
        if ($isCompleted) {
            $order->ammount_paid = $order->total_price;
        }
        $order->update();
        return back()->with('success', 'Status Changed');
    }
}
