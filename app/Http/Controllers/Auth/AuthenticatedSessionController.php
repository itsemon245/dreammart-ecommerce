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

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): Response
    {
        return Inertia::render('Auth/Login', [
            'canResetPassword' => Route::has('password.request'),
            'status' => session('status'),
        ]);
    }

     /**
     * Login an existing user
     */
    public function store(Request $request): RedirectResponse
    {
        // dd($request);
        $request->validate([
            'email' => 'required|exists:users,email',
            'password' => 'required'
        ]);
        $user = User::where('email', $request->email)
            ->get()->first();
        // dd($user->password);
        $remeber = $request->remember_me ? true : false;

        if (Hash::check($request->password, $user->password)) {
            Auth::login($user, $remeber);
            return redirect(RouteServiceProvider::HOME)->with('success', "Logged in Successfully");
        } else {
            return redirect('/')->with('error', 'Credentials didn\'t match');
        }

        
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/')->with('info', 'Logged Out!');
    }
}
