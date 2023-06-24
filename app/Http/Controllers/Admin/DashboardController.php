<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Order;
use App\Models\OrderItems;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        $totalOrders = Order::get()->count();
        $completed = Order::where('status', 'completed')->get()->count();
        $shipped = Order::where('status', 'shipped')->get()->count();
        $pending = Order::where('status', 'pending')->get()->count();
        $income = Order::where('status', 'completed')->get()->sum('total_price');

        $fashions = 0;
        $wearables = 0;
        $toys = 0;
        $electronics = 0;
        $items = OrderItems::with('product')->get();
        foreach ($items as $key => $item) {
            switch ($item->product->category_id) {
                case 1:
                    $fashions = $fashions + (1 * $item->qty);
                    break;
                case 2:
                    $wearables = $wearables + (1 * $item->qty);
                    break;
                case 3:
                    $toys = $toys + (1 * $item->qty);
                    break;
                case 4:
                    $electronics = $electronics + (1 * $item->qty);
                    break;

                default:
                    # code...
                    break;
            }
        }
        return view('backend.views.index', compact('totalOrders', 'completed', 'shipped', 'pending', 'fashions', 'toys', 'wearables', 'electronics', 'income'));
    }
}
