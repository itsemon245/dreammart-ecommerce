<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;

class ProfilePageController extends Controller
{
    public function viewProfile()
    {
        return inertia('Profile/Index');
    }
    public function viewSettings()
    {
        return inertia('Settings/Settings');
    }
}
