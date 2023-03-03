<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function viewRoles()
    {
        return view('backend.views.viewRoles');
    }
    public function addRoleView()
    {
        return view('backend.views.addRole');
    }
}
