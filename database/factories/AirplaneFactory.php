<?php

namespace Database\Factories;

use App\Models\Airplane_rating;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class AirplaneFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'NUMSER' => fake()->randomNumber(),
            'Manufacturer_Model' => fake()->realTextBetween(5,10),
            'Airplane_Rating_Number' => fake()->randomElement(Airplane_rating::pluck('Rating_Number')),
        ];
    }
}
