<?php

namespace App\Http\Controllers\Admin\auth;

use App\Models\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;
use Illuminate\Auth\Events\Registered;
use App\Providers\RouteServiceProvider;
use Illuminate\Validation\Rules\Password;

class AdminAuthenticationController extends Controller
{
    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        // dd($request->profile_image);
        $request->validate([
            'name' => 'required|string|max:255',
            'username' => 'required|string|max:255|unique:admins,username',
            'email' => 'required|string|email|max:255|unique:admins,email',
            'password' => [
                'required', 'confirmed', 'same:confirm_password',
                Password::min(8)
                    ->letters()
                    ->mixedCase()
                    ->numbers()
            ],
            'confirm_password' => 'required|same:password',
            'profile_image' => 'image|size:1024',
            'role' => 'min:2'
        ], [
            'role.min' => 'Unspecified Role'
        ]);

        $user = Admin::create([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => $request->role,
            'avater' => $request->avater


        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::ADMIN_HOME)->with('success', "Registered Successfully");
    }
}
