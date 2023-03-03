<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class AssignRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //retrive all permissions
        $permissions = Permission::get();

        //retrive admin role
        $adminRole = Role::where('name', 'admin')->first(); //admin role

        //give all permissions to admin
        $adminRole->syncPermissions($permissions);

        //assign the admin role to user 
        $user = User::first(); //admin user
        $user->assignRole('admin');
    }
}
