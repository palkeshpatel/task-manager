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
        // Create demo admin user
        User::create([
            'name' => 'Demo Admin',
            'email' => 'admin@demo.com',
            'password' => Hash::make('password'),
            'email_verified_at' => now(),
        ]);

        // Create demo regular user
        User::create([
            'name' => 'John Doe',
            'email' => 'john@demo.com',
            'password' => Hash::make('password'),
            'email_verified_at' => now(),
        ]);

        // Create demo team member
        User::create([
            'name' => 'Jane Smith',
            'email' => 'jane@demo.com',
            'password' => Hash::make('password'),
            'email_verified_at' => now(),
        ]);

        // Create additional demo users
        User::create([
            'name' => 'Mike Johnson',
            'email' => 'mike@demo.com',
            'password' => Hash::make('password'),
            'email_verified_at' => now(),
        ]);

        User::create([
            'name' => 'Sarah Wilson',
            'email' => 'sarah@demo.com',
            'password' => Hash::make('password'),
            'email_verified_at' => now(),
        ]);
    }
}
