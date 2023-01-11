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
        Schema::create('Crews', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('Staff_EMPNUM')->unsigned()->index();
            $table->string('Flight_FLIGHTNUM', 15);

            $table->unique(['Staff_EMPNUM', 'Flight_FLIGHTNUM']);

            $table->foreign('Staff_EMPNUM')->references('EMPNUM')->on('Staff')->onDelete('cascade');
            $table->foreign('Flight_FLIGHTNUM')->references('Flight_FLIGHTNUM')->on('Schedules')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Crews');
    }
};
