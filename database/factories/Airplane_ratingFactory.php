<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class Airplane_ratingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'Rating_Number' => fake()->randomNumber(),
            'Name' => fake()->lastName(),
            'Description' => fake()->realTextBetween(1,80)
        ];
    }
}
