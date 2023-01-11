<?php

namespace Database\Factories;

use App\Models\Schedule;
use App\Models\Staff;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Crew>
 */
class CrewFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'Staff_EMPNUM' => fake()->randomElement(Staff::pluck('EMPNUM')),
            'Flight_FLIGHTNUM' => fake()->randomElement(Schedule::pluck('Flight_FLIGHTNUM')),
        ];
    }
}
