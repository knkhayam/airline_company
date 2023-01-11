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
        Schema::create('Schedules', function (Blueprint $table) {
            $table->increments('id'); //using only for indexing //
            $table->string('Flight_FLIGHTNUM', 15);
            $table->date('Date');
            $table->dateTime('DEP_TIME');
            $table->dateTime('ARR_TIME');
            $table->integer('Airplane_NUMSER')->unsigned()->index();
            $table->integer('Pilot_EMPNUM')->unsigned()->index();

            $table->unique(['Flight_FLIGHTNUM', 'Airplane_NUMSER', 'Date']);

            $table->foreign('Flight_FLIGHTNUM')->references('FLIGHTNUM')->on('Flights')->onDelete('cascade');
            $table->foreign('Airplane_NUMSER')->references('NUMSER')->on('Airplanes')->onDelete('cascade');
            $table->foreign('Pilot_EMPNUM')->references('Staff_EMPNUM')->on('Pilots')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Schedules');
    }
};
