<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderPageController extends Controller
{
    //
    public function viewOrders()
    {
        return inertia('Product/Orders');
    }
}
