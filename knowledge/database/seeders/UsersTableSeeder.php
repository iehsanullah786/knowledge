<?php

namespace Database\Seeders;
use Illuminate\Support\Str;


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Create a sample user
        User::create([
            'name' => 'John Doe',
            'email' => 'john.doe@example.com',
            'email_verified_at' => now(), // Assuming email is verified
            'password' => Hash::make('password'),
            'remember_token' => Str::random(10),
        ]);

        // Create another sample user
        User::create([
            'name' => 'Jane Smith',
            'email' => 'jane.smith@example.com',
            'email_verified_at' => now(), // Assuming email is verified
            'password' => Hash::make('password'),
            'remember_token' => Str::random(10),
        ]);

        // You can add more users as needed
    }
}
