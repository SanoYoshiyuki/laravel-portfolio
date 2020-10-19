<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Users extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('email', 191)->unique();
            $table->string('user', 191)->unique();
            $table->string('password');
            $table->integer('tel');
            $table->integer('affiliate_id');
            $table->integer('pin');
            $table->string('bank');
            $table->integer('bank_accunt_number');
            $table->string('bank_deposit_type');
            $table->string('bank_branch');
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
        Schema::dropIfExists('users');
    }
}
