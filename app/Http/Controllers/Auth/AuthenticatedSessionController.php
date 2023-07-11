<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Inertia\Inertia;
use Inertia\Response;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Route;
use App\Providers\RouteServiceProvider;
use App\Http\Requests\Auth\LoginRequest;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create()
    {
        return view('backend.auth.login');
    }

    /**
     * Login an existing user
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        $request->authenticate();

        if (!auth()->user()->hasRole('user')) {
            return redirect(route('admin.dashboard'))->with('success', "Logged in Successfully");
        }

        return redirect(RouteServiceProvider::HOME)->with('success', "Logged in Successfully");
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/')->with('success', 'Logged Out!');
    }
}
