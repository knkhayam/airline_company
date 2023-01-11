<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ScheduleTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

       
        
        \DB::table('schedule')->insert(array (
            0 => 
            array (
                'id' => 1,
                'Flight_FLIGHTNUM' => 'Alice.',
                'Date' => '2022-12-02',
                'DEP_TIME' => '2022-12-02 02:15:00',
                'ARR_TIME' => '2022-12-02 13:30:00',
                'Airplane_NUMSER' => 3,
                'Pilot_EMPNUM' => 66888131,
            ),
            1 => 
            array (
                'id' => 2,
                'Flight_FLIGHTNUM' => 'PLEASE.',
                'Date' => '2022-12-10',
                'DEP_TIME' => '2022-12-10 00:00:00',
                'ARR_TIME' => '2022-12-11 05:00:00',
                'Airplane_NUMSER' => 3,
                'Pilot_EMPNUM' => 94823570,
            ),
        ));
        
        
    }
}