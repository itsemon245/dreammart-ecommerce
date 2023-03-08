<?php

namespace App\Http\Controllers\api;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Events\Registered;
use Laravel\Socialite\Facades\Socialite;

class SocialLoginController extends Controller
{
    public function redirectToProvider(string $provider)
    {
        return Socialite::driver($provider)->redirect();
    }


    public function handleCallback(string $provider)
    {
        $googleUser = Socialite::driver($provider)->stateless()->user();
        // dd($googleUser);
        //extract username
        $username = explode('@', $googleUser->email)[0];
        // dd($username);
        $user = User::updateOrCreate([
            'email' => $googleUser->email,
            // 'email' => $googleUser->email
        ], [
            'name' => $googleUser->name,
            'email' => $googleUser->email,
            'username' => $username,
            'google_id' => $googleUser->id,
            'avater' => $googleUser->avatar,
            'google_token' => $googleUser->token,
            'google_refresh_token' => $googleUser->refreshToken,
        ]);
        if (!$user->hasRole('user')) {
            $user->assignRole('user');
        }

        event(new Registered($user));

        Auth::login($user, true);

        return redirect('/')->with('success', "Registered Successfully");
    }
}
