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
                'password' => 'password',
                'status' => 1,
                'avater' => 'uploads/avaters/admin/bdemon245.svg'
            ],
            'editor' => [
                'name' => 'Ivana Hoffman',
                'email' => 'editor@gmail.com',
                'username' => 'editor',
                'password' => 'password',
                'status' => 1,
                'avater' => 'https://api.dicebear.com/5.x/bottts-neutral/svg?seed=Ivana Hoffman&scale=80&radius=5&eyes=bulging,dizzy,eva,frame1,frame2,glow,robocop,round,roundFrame01,roundFrame02,sensor,shade01,happy'
            ],
            'user' => [
                'name' => 'Jolie Price',
                'email' => 'user@gmail.com',
                'username' => 'user',
                'password' => 'password',
                'status' => 1,
                'avater' => 'https://api.dicebear.com/5.x/bottts-neutral/svg?seed=Jolie Price&scale=80&radius=5&eyes=bulging,dizzy,eva,frame1,frame2,glow,robocop,round,roundFrame01,roundFrame02,sensor,shade01,happy'
            ],
        ];
        foreach ($users as $user) {
            $user = User::create([
                'name' => $user['name'],
                'email' => $user['email'],
                'username' => $user['username'],
                'password' => Hash::make($user['password']),
                'avater' => $user['avater'],
                'status' => $user['status'],
            ]);
        }
    }
}
