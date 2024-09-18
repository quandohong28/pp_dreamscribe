<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'fullname' => 'Test User',
                'username' => 'testuser',
                'password' => Hash::make('12345678'),
                'alias' => 'Trác Phàm',
                'joined_at' => now(),
                'birthday' => '1990-01-01',
                'role' => 0,
                'rank_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'fullname' => 'Admin User',
                'username' => 'adminuser',
                'password' => Hash::make('12345678'),
                'alias' => 'Tư Mã Ý',
                'joined_at' => now(),
                'birthday' => '1990-01-01',
                'role' => 0,
                'rank_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        foreach ($users as $user) {
            User::create($user);
        }
    }
}
