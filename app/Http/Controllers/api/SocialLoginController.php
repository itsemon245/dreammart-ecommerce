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
        try {
            $googleUser = Socialite::driver($provider)->user();
            dd($googleUser);
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

            event(new Registered($user));

            Auth::login($user, true);

            return redirect()->intended('/')->with('success', "Registered Successfully");
        } catch (\Exception $e) {
            dd($e);
        }
    }
}
