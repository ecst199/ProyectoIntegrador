<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('name');
            $table->string('email');
            $table->integer('wins');
            $table->integer('loses');
            $table->integer('draws');
            $table->dateTime('lastPlay');
            $table->string('password');
            $table->integer('imageId')->unsigned();
            $table->foreign('imageId')->references('id')->on('images');
            //'name', 'email', 'wins', 'loses', 'draws', 'lastPlay','password',
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
