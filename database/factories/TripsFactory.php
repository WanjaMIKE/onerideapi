<?php

namespace Database\Factories;

use App\Models\Trips;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class TripsFactory extends Factory
{
    protected $model = Trips::class;

    public function definition()
    {
        return [
            'user_id' => User::inRandomOrder()->first()->id, // Random user id
            'start_location' => $this->faker->address,
            'end_location' => $this->faker->address,
            'status' => $this->faker->randomElement(['completed', 'upcoming']),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}

