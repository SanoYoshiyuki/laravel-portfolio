<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Gems extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gems', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('gem', 30);
            $table->integer('holding_reriod');
            $table->float('interest_rate');
            $table->integer('low_price');
            $table->integer('high_price');
            $table->integer('fee');
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
        Schema::dropIfExists('gems');
    }
}
