<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRatingsTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('ratings', function (Blueprint $table) {
            $table->unsignedTinyInteger('rating');
            $table->foreignId('user_id')->unsigned()->nullable();
            $table->foreignId('movies_id')->unsigned()->nullable();
            $table->string('title');
            $table->timestamps();
         });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::drop('ratings');
    }
}