<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Check if admin user already exists
        $admin = User::where('email', 'admin@fightfromdiseases.com')->first();
        
        if (!$admin) {
            User::create([
                'name' => 'Admin',
                'email' => 'admin@fightfromdiseases.com',
                'password' => Hash::make('admin123'), // Change this password after first login
                'email_verified_at' => now(),
            ]);
            
            $this->command->info('Admin user created successfully!');
            $this->command->info('Email: admin@fightfromdiseases.com');
            $this->command->info('Password: admin123');
            $this->command->warn('Please change the password after first login!');
        } else {
            $this->command->info('Admin user already exists.');
        }
    }
}
