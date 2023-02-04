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
use Illuminate\Support\Facades\Storage;
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
        if ($request->profile_image !== null) {
            $ext = $request->profile_image->extension();
            $fileName = "$request->username.$ext";
            $path = $request->profile_image->storeAs('avaters/admin', $fileName);
            $avater = $request->input('avater', $path);
        } else {
            $avater = $request->avater;
        }
        $request->validate([
            'name' => 'bail|required|string|max:255',
            'username' => 'bail|required|string|max:255|unique:admins,username',
            'email' => 'bail|required|string|email|max:255|unique:admins,email',
            'password' => ['bail', 'required', Password::defaults()],
            'confirm_password' => 'bail|required|same:password',
            'profile_image' => 'bail|required_without:avater|image|max:1024',
            'role' => 'bail|required'
        ]);

        $admin = new Admin();

        $admin->name = $request->name;
        $admin->username = $request->username;
        $admin->email = $request->email;
        $admin->password = Hash::make($request->password);
        $admin->role = $request->role;
        $admin->avater = $avater;
        $admin->save();

        event(new Registered($admin));

        Auth::login($admin, true);

        return redirect(RouteServiceProvider::ADMIN_HOME)->with('success', "Registered Successfully");
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/admin/login')->with('info', 'Logged Out!');
    }
}
