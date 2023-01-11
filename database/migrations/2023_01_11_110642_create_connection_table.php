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
        Schema::create('Connections', function (Blueprint $table) {
            $table->id();
            $table->integer('booking_id')->unsigned()->index();
            $table->string('Schedule_Flight_FLIGHTNUM', 15);

            $table->unique(['booking_id', 'Schedule_Flight_FLIGHTNUM']);

            $table->foreign('booking_id')->references('id')->on('Bookings')->onDelete('cascade');
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
        Schema::dropIfExists('Connections');
    }
};
