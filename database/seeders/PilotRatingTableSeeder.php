<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PilotRatingTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

       
        
        \DB::table('pilot_ratings')->insert(array (
            0 => 
            array (
                'id' => 1,
                'Pilot_EMPNUM' => 300,
                'Airplane_Rating_Number' => 93,
            ),
            1 => 
            array (
                'id' => 3,
                'Pilot_EMPNUM' => 66888131,
                'Airplane_Rating_Number' => 9731,
            ),
            2 => 
            array (
                'id' => 4,
                'Pilot_EMPNUM' => 94823570,
                'Airplane_Rating_Number' => 9731,
            ),
            3 => 
            array (
                'id' => 2,
                'Pilot_EMPNUM' => 94823570,
                'Airplane_Rating_Number' => 6570844,
            ),
        ));
        
        
    }
}