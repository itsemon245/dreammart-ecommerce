<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function addProduct()
    {
        return view('backend.views.addProduct');
    }
    public function viewProduct()
    {
        return view('backend.views.viewProduct');
    }
}
