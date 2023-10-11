<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $users = [
            [
                'name' => 'Superadmin',
                'email' => 'superadmin@gmail.com',
                'password' => bcrypt(12345678),
                'otp' => 1,
                'verification' => 'verified',
                'role' => 1,
            ], [
                'name' => 'Admin',
                'email' => 'admin@gmail.com',
                'password' => bcrypt(12345678),
                'otp' => 2,
                'verification' => 'verified',
                'role' => 2,
            ],[
                'name' => 'User',
                'email' => 'user@gmail.com',
                'password' => bcrypt(12345678),
                'otp' => 3,
                'verification' => 'verified',
                'role' => 3,
            ],
        ];

        User::insert($users);
    }
}
