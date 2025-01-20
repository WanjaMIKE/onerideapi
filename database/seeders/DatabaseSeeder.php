<?php

// database/seeders/DatabaseSeeder.php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Trips;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        // Create dummy users with unique phone numbers
        $user1 = User::create([
            'name' => 'Anne Apiyo',
            'email' => 'apiyo@example.com',
            'phone' => '1234567891',  // Unique phone number
            'password' => bcrypt('password123'),
            'role' => 'driver',
        ]);

        $user2 = User::create([
            'name' => 'Mark Otieno',
            'email' => 'mark@example.com',
            'phone' => '0987654322',  // Unique phone number
            'password' => bcrypt('password456'),
            'role' => 'rider',
        ]);

        // Create dummy trips for the first user (Anne Apiyo)
        Trips::create([
            'user_id' => $user1->id,
            'trip_id' => 'trip_' . md5(uniqid(rand(), true)),
            'start_location' => 'Nairobi',
            'end_location' => 'Mombasa',
            'status' => 'upcoming',
            'distance' => 480,
            'duration' => 30000,
            'price' => 1500.5,
            'pick_up_lat' => -1.286389,
            'pick_up_lng' => 36.817223,
            'drop_off_lat' => -4.043477,
            'drop_off_lng' => 39.668206,
            'car_type' => 'Sedan',
            'driver_name' => 'Anne Apiyo',
        ]);

        // Create dummy trips for the second user (Mark Otieno)
        Trips::create([
            'user_id' => $user2->id,
            'trip_id' => 'trip_' . md5(uniqid(rand(), true)),
            'start_location' => 'Kisumu',
            'end_location' => 'Nairobi',
            'status' => 'completed',
            'distance' => 350,
            'duration' => 20000,
            'price' => 1200.75,
            'pick_up_lat' => -0.091702,
            'pick_up_lng' => 34.761262,
            'drop_off_lat' => -1.286389,
            'drop_off_lng' => 36.817223,
            'car_type' => 'SUV',
            'driver_name' => 'Anne Apiyo',
        ]);
    }
}
