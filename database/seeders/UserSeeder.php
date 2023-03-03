<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            'admin' => [
                'name' => 'Mojahidul Islam',
                'email' => 'admin@gmail.com',
                'username' => 'admin',
                'password' => 'admin',
                'role' => 1,
                'avater' => 'uploads/avaters/admin/bdemon245.svg'
            ],
            'admin2' => [
                'name' => 'admin2',
                'email' => 'admin2@gmail.com',
                'username' => 'admin2',
                'password' => 'admin',
                'role' => 1,
                'avater' => 'uploads/avaters/admin/joynal.svg'
            ]
        ];
        foreach ($users as $user) {
            User::create([
                'name' => $user['name'],
                'email' => $user['email'],
                'username' => $user['username'],
                'password' => Hash::make($user['password']),
                'avater' => $user['avater'],
                'role' => $user['role'],
            ]);
        }
    }
}
