<?php

namespace Database\Factories;

use App\Models\Passenger;
use App\Models\Schedule;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Booking>
 */
class BookingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'Passenger_Passport_No' => fake()->randomElement(Passenger::pluck('Passport_No')),
            'Schedule_Flight_FLIGHTNUM' => fake()->randomElement(Schedule::pluck('Flight_FLIGHTNUM')),
            
        ];
    }
}
