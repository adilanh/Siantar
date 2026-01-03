<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class LoginUserSeeder extends Seeder
{
    /**
     * Seed a default user for login.
     */
    public function run(): void
    {
        User::updateOrCreate(
            ['email' => 'admin@example.com'],
            [
                'name' => 'Admin Siantar',
                'username' => 'admin',
                'nip' => '1234567890',
                'role' => 'admin',
                'password' => Hash::make('password'),
            ]
        );
    }
}
