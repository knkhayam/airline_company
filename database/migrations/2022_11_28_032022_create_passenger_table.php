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
        Schema::create('Passengers', function (Blueprint $table) {
            $table->integer('Passport_No')->unsigned()->primary();
            $table->string('SURNAME', 30);
            $table->string('NAME', 30);
            $table->string('ADDRESS', 30);
            $table->string('PHONE', 30);
           
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Passengers');
    }
};
