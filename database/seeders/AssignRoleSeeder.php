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
        $all = Permission::get();

        //only create permissions for editor
        $create = Permission::where('name', 'LIKE', "%create%")
            ->where('name', 'not like', "%role%")
            ->where('name', 'not like', "%user%")->get();

        //only read permissions
        $read = Permission::where('name', 'LIKE', "%read%")->get();

        //only update permissions
        $update = Permission::where('name', 'LIKE', "%update%")->get();

        //only delete permissions
        $delete = Permission::where('name', 'LIKE', "%delete%")->get();

        //retrive roles
        $admin = Role::where('name', 'admin')->first(); //admin role

        $editor = Role::where('name', 'editor')->first(); //editor role

        $user = Role::where('name', 'user')->first(); //user role

        //give all permissions to admin
        $admin->syncPermissions($all);

        //give permissions to editor
        $editor->syncPermissions([...$read, ...$update, ...$create]);


        //give permissions to user
        $user->syncPermissions($read);
        

        $users = User::get();

        foreach ($users as $key => $user) {
            $user->assignRole('admin');
        }
    }
}