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
        Schema::create('Bookings', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('Passenger_Passport_No')->unsigned()->index();
            $table->string('Schedule_Flight_FLIGHTNUM', 15);

            $table->unique(['Passenger_Passport_No', 'Schedule_Flight_FLIGHTNUM']);
            
            $table->foreign('Passenger_Passport_No')->references('Passport_No')->on('Passengers')->onDelete('cascade');
            $table->foreign('Schedule_Flight_FLIGHTNUM')->references('Flight_FLIGHTNUM')->on('Schedules')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Bookings');
    }
};
