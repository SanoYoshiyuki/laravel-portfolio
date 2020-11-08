<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Myfarms extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('myfarms', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->integer('user_id');
            $table->integer('gem_id');
            $table->integer('transaction_id');
            $table->integer('buy_price');
            $table->integer('sell_price');
            $table->date('buy_date');
            $table->date('sell_date');
            $table->integer('status');
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
        Schema::dropIfExists('myfarms');
    }
}
