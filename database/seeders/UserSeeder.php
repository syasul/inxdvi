<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // 1. Admin User
        User::updateOrCreate(
            ['email' => 'admin@inxdvi.com'],
            [
                'name' => 'Admin INXDVI',
                'password' => Hash::make('password'),
                'is_admin' => true,
            ]
        );

        // 2. Regular User (optional, for testing roles)
        User::updateOrCreate(
            ['email' => 'user@inxdvi.com'],
            [
                'name' => 'User INXDVI',
                'password' => Hash::make('password'),
                'is_admin' => false,
            ]
        );
    }
}
