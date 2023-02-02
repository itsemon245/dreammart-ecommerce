<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('backend.views.index');
    }
    public function profile()
    {
        return view('backend.views.profile');
    }
    public function redirectToLogin()
    {
        return view('backend.auth.login');
    }
}
