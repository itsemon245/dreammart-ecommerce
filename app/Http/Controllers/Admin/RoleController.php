<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Permission;

class RoleController extends Controller
{
    public function viewRoles()
    {
        return view('backend.views.viewRoles');
    }
    public function addRoleView()
    {
        $roles = Role::with('permissions')->get();
        // dd($roles);

        return view('backend.views.addRole', compact('roles'));
    }
    public function createRole(Request $request)
    {
        $role = Role::create([
            'name' => $request->role,
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
