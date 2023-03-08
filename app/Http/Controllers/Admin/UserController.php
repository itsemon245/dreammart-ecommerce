<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function toggleStatus($id)
    {
        $user = User::find($id);
        $user->status = $user->status ? 0 : 1;
        $user->update();
        return back();
    }

    public function createUser(Request $request)
    {

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:' . User::class,
            'password' => 'required|min:6',
            'confirm_password' => 'required|same:password',
            'username' => 'bail|required|string|max:255|unique:users,username',
            'role' => 'bail|required',
        ]);

        $avater = "https://api.dicebear.com/5.x/bottts-neutral/svg?seed=$request->name&scale=80&radius=5&eyes=bulging,dizzy,eva,frame1,frame2,glow,robocop,round,roundFrame01,roundFrame02,sensor,shade01,happy";
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'username' => $request->username,
            'password' => Hash::make($request->password),
            'avater' => $avater
        ]);
        $user->assignRole($request->role);

        return back()->with('success', 'New user created');
    }
}
