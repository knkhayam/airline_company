<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AirplaneTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        
        \DB::table('airplanes')->insert(array (
            0 => 
            array (
                'NUMSER' => 1,
                'Manufacturer_Model' => 'BOEING-777',
                'Airplane_Rating_Number' => 9731,
            ),
            1 => 
            array (
                'NUMSER' => 3,
                'Manufacturer_Model' => 'BOEING-789',
                'Airplane_Rating_Number' => 9731,
            ),
            2 => 
            array (
                'NUMSER' => 4,
                'Manufacturer_Model' => 'KING-656',
                'Airplane_Rating_Number' => 93,
            ),
            3 => 
            array (
                'NUMSER' => 5,
                'Manufacturer_Model' => 'Queen of.',
                'Airplane_Rating_Number' => 627606,
            ),
            4 => 
            array (
                'NUMSER' => 9,
                'Manufacturer_Model' => 'Duchess.',
                'Airplane_Rating_Number' => 93,
            ),
            5 => 
            array (
                'NUMSER' => 49,
                'Manufacturer_Model' => 'Mouse.',
                'Airplane_Rating_Number' => 9731,
            ),
            6 => 
            array (
                'NUMSER' => 271,
                'Manufacturer_Model' => 'I had.',
                'Airplane_Rating_Number' => 24297,
            ),
            7 => 
            array (
                'NUMSER' => 7221,
                'Manufacturer_Model' => 'Hatter.',
                'Airplane_Rating_Number' => 276,
            ),
            8 => 
            array (
                'NUMSER' => 86808868,
                'Manufacturer_Model' => 'Eaglet.',
                'Airplane_Rating_Number' => 9731,
            ),
        ));
        
        
    }
}