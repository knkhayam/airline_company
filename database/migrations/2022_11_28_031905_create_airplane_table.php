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
        Schema::create('Airplanes', function (Blueprint $table) {
            $table->increments('NUMSER');
            $table->string('Manufacturer_Model', 20);
            $table->integer('Airplane_Rating_Number')->unsigned()->index();

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
        Schema::dropIfExists('Airplanes');
    }
};
