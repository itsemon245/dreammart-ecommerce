<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = [
            'user' => [
                'create',
                'read',
                'update',
            ],
            'role' => [
                'create',
                'read',
                'update',
                'delete'
            ],
            'category' => [
                'create',
                'read',
                'update',
                'delete'
            ],
            'brand' => [
                'create',
                'read',
                'update',
                'delete'
            ],
            'event' => [
                'create',
                'read',
                'update',
                'delete'
            ],
            'product' => [
                'create',
                'read',
                'update',
                'delete'
            ],
            'user' => [
                'create',
                'read',
                'update',
                'status'
            ],
        ];
        foreach ($permissions as $key => $values) {
            foreach ($values as $value) {
                Permission::create(['name' => "$key $value"]);
            }
        }
    }
}
