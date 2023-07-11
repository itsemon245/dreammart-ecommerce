<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Inertia\Inertia;
use Inertia\Response;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;
use Illuminate\Auth\Events\Registered;
use App\Providers\RouteServiceProvider;
use Spatie\Permission\Models\Permission;
use Illuminate\Validation\Rules\Password;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create()
    {
        // return Inertia::render('Auth/Register');
        return view('backend.auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        if ($request->has('profile_image')) {
            $ext = $request->profile_image->extension();
            $fileName = "$request->username.$ext";
            $path = $request->profile_image->storeAs('uploads/avaters/admin', $fileName, 'public');
            $avater = $request->input('avater', $path);
        }
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email',
            'password' => 'required|confirmed|min:6',
            'password_confirmation' => 'required|min:6',
            'username' => 'bail|required|string|max:255|unique:users,username',
            'profile_image' => 'bail|image|max:5120',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'username' => $request->username,
            'password' => Hash::make($request->password),
            'avater' => $avater
        ]);
        $user->assignRole('user');
        event(new Registered($user));

        Auth::login($user);
        return redirect(RouteServiceProvider::HOME)->with('success', "Registered Successfully");
    }
}
