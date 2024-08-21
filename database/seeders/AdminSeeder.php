<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User; // Make sure to import the User model

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Check if an admin already exists to prevent duplicates
        if (User::where('email', 'admin@example.com')->doesntExist()) {
            // Create an admin user
            User::create([
                'name' => 'Admin',
                'lastName' => 'User',
                'email' => 'admin@example.com',
                'role' => 'admin', // Set role to 'admin'
                'status' => 1, // Set status to active
                'password' => Hash::make('securepassword'), // Use a strong password
            ]);
        }
    }
}
