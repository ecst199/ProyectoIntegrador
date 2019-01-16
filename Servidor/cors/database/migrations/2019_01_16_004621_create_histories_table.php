<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHistoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('histories', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('plays',8);
            $table->dateTime('beginDate');
            $table->dateTime('endDate');
            $table->integer('moveNumber');
            $table->string('turn');         
            $table->integer('boardId')->unsigned();
            $table->foreign('boardId')->references('id')->on('boards');   
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('histories');
    }
}
