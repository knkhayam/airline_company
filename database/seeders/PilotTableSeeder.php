<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PilotTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

      
        
        \DB::table('pilots')->insert(array (
            0 => 
            array (
                'Staff_EMPNUM' => 300,
            ),
            1 => 
            array (
                'Staff_EMPNUM' => 66888131,
            ),
            2 => 
            array (
                'Staff_EMPNUM' => 94823570,
            ),
        ));
        
        
    }
}