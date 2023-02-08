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
        if ($request->has('profile_image')) {
            $ext = $request->profile_image->extension();
            $fileName = "$request->username.$ext";
            $path = $request->profile_image->storeAs('uploads/avaters/admin', $fileName, 'public');
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
        ]);

        $admin = new Admin();

        $admin->name = $request->name;
        $admin->username = $request->username;
        $admin->email = $request->email;
        $admin->password = Hash::make($request->password);
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

    /**
     * Login an existing user
     */
    public function login(Request $request): RedirectResponse
    {
        // dd($request);
        $request->validate([
            'email' => 'required|exists:admins,email',
            'password' => 'required'
        ]);
        $user = Admin::where('email', $request->email)
            ->get()->first();
        // dd($user->password);
        $remeber = $request->remember_me ? true : false;
        if (Hash::check($request->password, $user->password)) {
            Auth::login($user, $remeber);
            return redirect(RouteServiceProvider::ADMIN_HOME)->with('success', "Logged in Successfully");
        } else {
            return redirect('/admin/login')->with('error', 'Credentials didn\'t match');
        }

        
    }
}
