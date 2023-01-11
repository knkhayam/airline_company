<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class FlightTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('flight')->insert(array (
            0 => 
            array (
                'FLIGHTNUM' => 'Alice.',
                'ORIGIN' => 'West Florenceshire',
                'DEST' => 'West Caterina',
            ),
            1 => 
            array (
                'FLIGHTNUM' => 'Gryphon.',
                'ORIGIN' => 'North Effie',
                'DEST' => 'Thielport',
            ),
            2 => 
            array (
                'FLIGHTNUM' => 'Now I.',
                'ORIGIN' => 'Port Gregorio',
                'DEST' => 'East Mattie',
            ),
            3 => 
            array (
                'FLIGHTNUM' => 'PLEASE.',
                'ORIGIN' => 'South Damian',
                'DEST' => 'Port Alfredaside',
            ),
        ));
        
        
    }
}