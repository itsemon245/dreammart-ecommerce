<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        if (auth()->user()) {
            return view('backend.views.index');
        } else {
            return redirect()->route('login');
        }
    }
    public function profile()
    {
        // dd(auth()->user());
        return view('backend.views.profile');
    }
    public function redirectToLogin()
    {
        return view('backend.auth.login');
    }
    public function redirectToRegister()
    {
        return view('backend.auth.register');
    }
}
