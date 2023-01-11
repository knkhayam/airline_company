<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class FlightFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
        
            'FLIGHTNUM' => fake()->realTextBetween(5,10),
            'ORIGIN' => fake()->city(),
            'DEST' => fake()->city(),
            
        ];
    }
}
