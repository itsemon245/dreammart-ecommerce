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
            'role' => [
                'create',
                'update',
                'delete'
            ],
            'category' => [
                'create',
                'update',
                'delete'
            ],
            'brand' => [
                'create',
                'update',
                'delete'
            ],
            'event' => [
                'create',
                'update',
                'delete'
            ],
            'product' => [
                'create',
                'update',
                'delete'
            ],
            'user' => [
                'create',
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
