<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Staff>
 */
class StaffFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'EMPNUM' => fake()->randomNumber(),
            'SURNAME' => fake()->lastName(),
            'NAME' => fake()->firstName(),
            'ADDRESS' => fake()->address(),
            'PHONE' => fake()->phoneNumber(),
            'SALARY' => fake()->numberBetween(0,99999)
        ];
    }
}
