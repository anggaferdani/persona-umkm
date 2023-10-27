<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'name' => 'Enah Pahlawati',
                'email' => 'enahpahlawati@gmail.com',
                'no_telp' => '081210083340',
                'password' => bcrypt('personamember123'),
                'otp' => 4,
                'verification' => 'verified',
                'role' => 3,
            ], [
                'name' => 'Kueffi',
                'email' => 'kueffi@gmail.com',
                'no_telp' => '081220000634',
                'password' => bcrypt('personamember123'),
                'otp' => 5,
                'verification' => 'verified',
                'role' => 3,
            ],[
                'name' => 'Hadianti Deliana R',
                'email' => 'hadiantidelianar@gmail.com',
                'no_telp' => '087739603693',
                'password' => bcrypt('personamember123'),
                'otp' => 6,
                'verification' => 'verified',
                'role' => 3,
            ],[
                'name' => 'Hanum Wahyu',
                'email' => 'hanumwahyu@gmail.com',
                'no_telp' => '085222296625',
                'password' => bcrypt('personamember123'),
                'otp' => 7,
                'verification' => 'verified',
                'role' => 3,
            ],
        ];

        User::insert($users);
    }
}
