<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateZipcodesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('zipcodes', function (Blueprint $table) {
            $table->dropColumn('id');
            $table->integer('ZipCode')->unique();
            $table->string('MixedCity');
            $table->string('StateCode');
            $table->integer('StateFIPS');
            $table->string('County');
            $table->string('MixedCounty');
            $table->float('Latitude');
            $table->float('Longitude');
            $table->integer('GMT');
            $table->boolean('DST');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('zipcodes');
    }
}
