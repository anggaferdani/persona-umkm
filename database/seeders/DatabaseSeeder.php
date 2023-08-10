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
                'role' => 1,
            ], [
                'name' => 'Admin',
                'email' => 'admin@gmail.com',
                'password' => bcrypt(12345678),
                'role' => 2,
            ],
        ];

        User::insert($users);
    }
}
