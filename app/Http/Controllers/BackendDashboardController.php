<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BackendDashboardController extends Controller
{
    public function index()
    {
        return view('backend.html.index');
    }
}
