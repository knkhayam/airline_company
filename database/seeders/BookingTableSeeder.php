<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BookingTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        
        \DB::table('bookings')->insert(array (
            0 => 
            array (
                'id' => 8,
                'Passenger_Passport_No' => 2,
                'Schedule_Flight_FLIGHTNUM' => 'Alice.',
            ),
            1 => 
            array (
                'id' => 9,
                'Passenger_Passport_No' => 2,
                'Schedule_Flight_FLIGHTNUM' => 'PLEASE.',
            ),
            2 => 
            array (
                'id' => 5,
                'Passenger_Passport_No' => 6,
                'Schedule_Flight_FLIGHTNUM' => 'Alice.',
            ),
            3 => 
            array (
                'id' => 11,
                'Passenger_Passport_No' => 7,
                'Schedule_Flight_FLIGHTNUM' => 'Alice.',
            ),
            4 => 
            array (
                'id' => 1,
                'Passenger_Passport_No' => 46,
                'Schedule_Flight_FLIGHTNUM' => 'Alice.',
            ),
            5 => 
            array (
                'id' => 3,
                'Passenger_Passport_No' => 75,
                'Schedule_Flight_FLIGHTNUM' => 'Alice.',
            ),
            6 => 
            array (
                'id' => 2,
                'Passenger_Passport_No' => 758,
                'Schedule_Flight_FLIGHTNUM' => 'Alice.',
            ),
            7 => 
            array (
                'id' => 7,
                'Passenger_Passport_No' => 6716,
                'Schedule_Flight_FLIGHTNUM' => 'PLEASE.',
            ),
            8 => 
            array (
                'id' => 4,
                'Passenger_Passport_No' => 811145,
                'Schedule_Flight_FLIGHTNUM' => 'Alice.',
            ),
            9 => 
            array (
                'id' => 10,
                'Passenger_Passport_No' => 811145,
                'Schedule_Flight_FLIGHTNUM' => 'PLEASE.',
            ),
        ));
        
        
    }
}