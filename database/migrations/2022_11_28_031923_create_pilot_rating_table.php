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
        Schema::create('Pilot_ratings', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('Pilot_EMPNUM')->unsigned()->index();
            $table->integer('Airplane_Rating_Number')->unsigned()->index();

            $table->unique(['Pilot_EMPNUM', 'Airplane_Rating_Number']);
            
            $table->foreign('Pilot_EMPNUM')->references('Staff_EMPNUM')->on('Pilots')->onDelete('cascade');
            $table->foreign('Airplane_Rating_Number')->references('Rating_Number')->on('Airplane_ratings')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Pilot_ratings');
    }
};
