<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AirplaneRatingTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        
        
        \DB::table('airplane_ratings')->insert(array (
            0 => 
            array (
                'Rating_Number' => 93,
                'Name' => 'Wolf',
                'Description' => 'Alice again, in a solemn tone, only changing the order of the jury asked.',
            ),
            1 => 
            array (
                'Rating_Number' => 276,
                'Name' => 'Wiegand',
                'Description' => 'Alice to herself, \'because of his Normans--" How are you thinking of?\' \'I beg.',
            ),
            2 => 
            array (
                'Rating_Number' => 9731,
                'Name' => 'Connelly',
                'Description' => 'Alice whispered, \'that it\'s done by everybody minding their own business!\'.',
            ),
            3 => 
            array (
                'Rating_Number' => 24297,
                'Name' => 'Padberg',
                'Description' => 'CHAPTER IV. The Rabbit Sends in a very humble tone, going down on one side, to.',
            ),
            4 => 
            array (
                'Rating_Number' => 627606,
                'Name' => 'Homenick',
                'Description' => 'Queen, who were all shaped like the wind, and was surprised to see what would.',
            ),
            5 => 
            array (
                'Rating_Number' => 6570844,
                'Name' => 'O\'Kon',
                'Description' => 'Mock Turtle, capering wildly about. \'Change lobsters again!\' yelled the.',
            ),
        ));
        
        
    }
}