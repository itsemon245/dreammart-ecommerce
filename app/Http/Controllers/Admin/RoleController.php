<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use App\Http\Controllers\Controller;
use App\Models\User;
use Spatie\Permission\Models\Permission;

class RoleController extends Controller
{
    public function viewRoles()
    {
        $users = User::with('roles')->get();
        $roles = Role::get();
        return view('backend.views.viewRoles', compact('users', 'roles'));
    }
    public function addRoleView()
    {
        $roles = Role::with('permissions')->get();
        // dd($roles);

        return view('backend.views.addRole', compact('roles'));
    }
    public function createRole(Request $request)
    {
        $request->validate([
            'role' => 'required|unique:roles,name'
        ]);
        $role = Role::create([
            'name' => strtolower($request->role),
        ]);

        return redirect()->route('role.add')->with('success', 'Role Created');
    }
    public function editRoleView($id)
    {
        $role = Role::find($id);
        $permissions = Permission::get();
        $hasPermissions = $role->permissions->pluck('id');
        return view('backend.views.editRole', compact('role', 'permissions', 'hasPermissions'));
    }

    public function updateRole(Request $request, $id)
    {
        $role = Role::find($id);
        $role->name = $request->role;
        $role->save();
        $role->syncPermissions($request->permissions);
        return back()->with('success', 'Role & Permissions Updated');
    }
}
