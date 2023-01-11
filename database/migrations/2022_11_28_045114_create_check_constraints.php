<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $sql = <<<SQL
CREATE PROCEDURE check_pilot(IN Pilot_EMPNUM INT, IN Airplane_NUMSER INT)
BEGIN
    select count(*) from pilot_ratings as p join airplane_ratings as ar on p.Airplane_Rating_Number = ar.Rating_Number join airplanes as a on a.Airplane_Rating_Number = ar.Rating_Number where p.Pilot_EMPNUM = Pilot_EMPNUM and a.NUMSER = Airplane_NUMSER;
END 
SQL;
        DB::connection()->getPdo()->exec($sql);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement('
        Drop PROCEDURE IF EXISTS check_pilot;
        ');
    }
};
