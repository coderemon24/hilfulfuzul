<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
            \App\Models\Admin::create([
                'name' => 'Admin User',
                'username' => 'admin',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('password'),
                'role' => 'Super_Admin',
                'image' => 'default.png',
                'phone' => '1234567890',
                'address' => '123 Admin Street',
                'details' => 'This is the default admin user.',
            ]);
    }
}
