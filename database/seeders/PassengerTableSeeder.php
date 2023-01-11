<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PassengerTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

    
        
        \DB::table('passengers')->insert(array (
            0 => 
            array (
                'Passport_No' => 2,
                'SURNAME' => 'Altenwerth',
                'NAME' => 'Mazie',
                'ADDRESS' => '542 Brendan Rapid Apt. 721',
                'PHONE' => '+1-352-574-0755',
            ),
            1 => 
            array (
                'Passport_No' => 6,
                'SURNAME' => 'Collins',
                'NAME' => 'Annabelle',
                'ADDRESS' => '32094 Hudson Flat',
                'PHONE' => '574-269-3637',
            ),
            2 => 
            array (
                'Passport_No' => 7,
                'SURNAME' => 'Turner',
                'NAME' => 'Foster',
                'ADDRESS' => '239 Marge Prairie Apt. 012',
            'PHONE' => '(667) 249-3765',
            ),
            3 => 
            array (
                'Passport_No' => 46,
                'SURNAME' => 'Veum',
                'NAME' => 'Saige',
                'ADDRESS' => '1858 Dicki Pass',
                'PHONE' => '+1.458.303.3560',
            ),
            4 => 
            array (
                'Passport_No' => 75,
                'SURNAME' => 'Reynolds',
                'NAME' => 'Marian',
                'ADDRESS' => '47264 Cummerata Turnpike',
                'PHONE' => '267-608-9885',
            ),
            5 => 
            array (
                'Passport_No' => 756,
                'SURNAME' => 'McKenzie',
                'NAME' => 'Marjory',
                'ADDRESS' => '877 Zieme Point Apt. 362',
            'PHONE' => '+1 (283) 361-4949',
            ),
            6 => 
            array (
                'Passport_No' => 758,
                'SURNAME' => 'Carter',
                'NAME' => 'Cydney',
                'ADDRESS' => '944 King Square Suite 863',
                'PHONE' => '+1.432.616.3841',
            ),
            7 => 
            array (
                'Passport_No' => 6716,
                'SURNAME' => 'Bode',
                'NAME' => 'Beverly',
                'ADDRESS' => '6314 Hertha Shoals Suite 007',
            'PHONE' => '+1 (425) 645-9008',
            ),
            8 => 
            array (
                'Passport_No' => 811145,
                'SURNAME' => 'Barrows',
                'NAME' => 'Nicholas',
                'ADDRESS' => '6906 Cronin Villages',
                'PHONE' => '1-458-568-8606',
            ),
            9 => 
            array (
                'Passport_No' => 7637295,
                'SURNAME' => 'Maggio',
                'NAME' => 'Jimmie',
                'ADDRESS' => '7637 Carey Junctions',
                'PHONE' => '828.815.9432',
            ),
            10 => 
            array (
                'Passport_No' => 574305506,
                'SURNAME' => 'Harber',
                'NAME' => 'Allie',
                'ADDRESS' => '364 Enrico Center',
                'PHONE' => '+14846379180',
            ),
        ));
        
        
    }
}