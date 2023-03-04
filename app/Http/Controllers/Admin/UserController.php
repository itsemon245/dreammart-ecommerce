<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function toggleStatus($id)
    {
        $user = User::find($id);
        $user->status = $user->status ? 0 : 1;
        $user->update();
        return back();
    }
}
