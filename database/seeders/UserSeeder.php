<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        // Create admin user with credentials: admin / admin
        User::create([
            'name' => 'Admin',
            'email' => 'admin',
            'password' => Hash::make('admin'),
        ]);
    }
}
