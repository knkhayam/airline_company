<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class StaffTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        
        
        \DB::table('staff')->insert(array (
            0 => 
            array (
                'EMPNUM' => 2,
                'SURNAME' => 'Howell',
                'NAME' => 'Darien',
                'ADDRESS' => '3850 Heidi Glens
Mosciskiton, OR 90397-5061',
                'PHONE' => '810.576.3954',
                'SALARY' => 42089.0,
            ),
            1 => 
            array (
                'EMPNUM' => 300,
                'SURNAME' => 'Hilpert',
                'NAME' => 'Chad',
                'ADDRESS' => '70072 Cummerata Highway
West Annamaetown, VT 21045-8333',
                'PHONE' => '1-601-326-1612',
                'SALARY' => 73820.0,
            ),
            2 => 
            array (
                'EMPNUM' => 339644,
                'SURNAME' => 'Wintheiser',
                'NAME' => 'Trevor',
                'ADDRESS' => '56110 Huels Common
North Tania, NE 14983',
                'PHONE' => '1-818-332-8066',
                'SALARY' => 38389.0,
            ),
            3 => 
            array (
                'EMPNUM' => 340075,
                'SURNAME' => 'Cremin',
                'NAME' => 'Elton',
                'ADDRESS' => '285 Lesch Rapid
South Addiehaven, CT 42797-6693',
                'PHONE' => '603.898.5889',
                'SALARY' => 29207.0,
            ),
            4 => 
            array (
                'EMPNUM' => 4985460,
                'SURNAME' => 'Schulist',
                'NAME' => 'Myrtle',
                'ADDRESS' => '93678 Krystina Heights Suite 418
Myahmouth, MS 29059',
            'PHONE' => '(279) 581-0951',
                'SALARY' => 60791.0,
            ),
            5 => 
            array (
                'EMPNUM' => 66888131,
                'SURNAME' => 'Wilderman',
                'NAME' => 'Clementina',
                'ADDRESS' => '552 Anastasia Views Suite 320
Keonshire, TX 81843-6318',
            'PHONE' => '(731) 378-4493',
                'SALARY' => 54034.0,
            ),
            6 => 
            array (
                'EMPNUM' => 80162240,
                'SURNAME' => 'Renner',
                'NAME' => 'Darryl',
                'ADDRESS' => '6837 Schowalter Inlet Apt. 824
Port Alene, TN 10555',
                'PHONE' => '+1.785.908.9039',
                'SALARY' => 11482.0,
            ),
            7 => 
            array (
                'EMPNUM' => 86835865,
                'SURNAME' => 'Eichmann',
                'NAME' => 'Jarrell',
                'ADDRESS' => '563 Josephine Ports Suite 413
East Shannyview, MN 57632',
            'PHONE' => '(806) 368-2209',
                'SALARY' => 30989.0,
            ),
            8 => 
            array (
                'EMPNUM' => 94823570,
                'SURNAME' => 'Predovic',
                'NAME' => 'Mariano',
                'ADDRESS' => '32634 Kenyatta Squares
West Robbieland, LA 00102-9781',
                'PHONE' => '608.913.3415',
                'SALARY' => 14611.0,
            ),
            9 => 
            array (
                'EMPNUM' => 329874520,
                'SURNAME' => 'Wisozk',
                'NAME' => 'Raleigh',
                'ADDRESS' => '153 Isadore Mount Suite 179
Schneiderhaven, TX 90631-6630',
            'PHONE' => '+1 (979) 213-2832',
                'SALARY' => 67494.0,
            ),
        ));
        
        
    }
}