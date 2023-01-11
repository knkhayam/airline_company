<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Airplane;
use App\Models\Airplane_rating;
use App\Models\Booking;
use App\Models\Crew;
use App\Models\Flight;
use App\Models\Passenger;
use App\Models\Pilot;
use App\Models\Pilot_rating;
use App\Models\Schedule;
use App\Models\Staff;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(StaffTableSeeder::class);
        $this->call(PilotTableSeeder::class);
        $this->call(AirplaneRatingTableSeeder::class);
        $this->call(AirplaneTableSeeder::class);
        $this->call(PilotRatingTableSeeder::class);
        $this->call(FlightTableSeeder::class);
        $this->call(ScheduleTableSeeder::class);
        $this->call(CrewTableSeeder::class);
        $this->call(PassengerTableSeeder::class);
        $this->call(BookingTableSeeder::class);


        // The idea is to add fake data using Model Factory ///
        
        //Staff::factory(10)->create();
        //Pilot::factory(4)->create();
        //Airplane_rating::factory(3)->create();
        //Airplane::factory(7)->create();
        //Pilot_rating::factory(4)->create();
        //Flight::factory(4)->create();
        
        /// Now some correct records //

        // Creating a Schedule entry //



        //Crew::factory(20)->create();
        //Passenger::factory(10)->create();
        //Booking::factory(5)->create();
        

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);


        
    }
}
