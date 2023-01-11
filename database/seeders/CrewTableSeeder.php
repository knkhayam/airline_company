<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CrewTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        
        \DB::table('crews')->insert(array (
            0 => 
            array (
                'id' => 3,
                'Staff_EMPNUM' => 300,
                'Flight_FLIGHTNUM' => 'Alice.',
            ),
            1 => 
            array (
                'id' => 2,
                'Staff_EMPNUM' => 340075,
                'Flight_FLIGHTNUM' => 'Alice.',
            ),
            2 => 
            array (
                'id' => 4,
                'Staff_EMPNUM' => 4985460,
                'Flight_FLIGHTNUM' => 'Alice.',
            ),
            3 => 
            array (
                'id' => 5,
                'Staff_EMPNUM' => 66888131,
                'Flight_FLIGHTNUM' => 'Alice.',
            ),
            4 => 
            array (
                'id' => 1,
                'Staff_EMPNUM' => 86835865,
                'Flight_FLIGHTNUM' => 'Alice.',
            ),
        ));
        
        
    }
}