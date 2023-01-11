<?php

namespace Database\Factories;

use App\Models\Airplane_rating;
use App\Models\Pilot;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class Pilot_ratingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'Pilot_EMPNUM' => fake()->randomElement(Pilot::pluck('Staff_EMPNUM')),
            'Airplane_Rating_Number' => fake()->randomElement(Airplane_rating::pluck('Rating_Number')),
        ];
    }
}
