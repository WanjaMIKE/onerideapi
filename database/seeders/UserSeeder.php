<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'name' => 'Anne Apiyo',
            'email' => 'apiyo@example.com',
            'password' => Hash::make('password123'),
            'role' => 'driver',
        ]);

        User::create([
            'name' => 'Jane ',
            'email' => 'jane@example.com',
            'password' => Hash::make('password123'),
            'role' => 'passenger',
        ]);
    }
}
