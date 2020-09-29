<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AllowNulls extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('zipcodes', function (Blueprint $table) {
            //
            $table->string('County')->nullable()->change();
            $table->string('MixedCounty')->nullable()->change();
            $table->integer('StateFIPS')->nullable()->change();
            $table->integer('CountyFIPS')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('zipcodes', function (Blueprint $table) {
            //
        });
    }
}
