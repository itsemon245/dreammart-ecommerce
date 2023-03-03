<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{
    public function viewRoles()
    {
        return view('backend.views.viewRoles');
    }
    public function addRoleView()
    {
        $roles = Role::get();
        return view('backend.views.addRole', compact('roles'));
    }
    public function createRole(Request $request)
    {
        $role = Role::create([
            'name' => $request->role,
        ]);
        return redirect()->route('role.add')->with('success', 'Role Created');
    }
    public function deleteRole($id)
    {
        $role = Role::find($id)->delete();
        return redirect()->route('role.add')->with('success', 'Role Deleted');
    }
}
