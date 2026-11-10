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
        User::create([
            'name' => 'Reza',
            'username' => 'reza',
            'email' => 'reza@dev.com',
            'password' => bcrypt('reza1234'),
            'email_verified_at' => now(),
        ])->assignRole('Superadmin');
    }
}