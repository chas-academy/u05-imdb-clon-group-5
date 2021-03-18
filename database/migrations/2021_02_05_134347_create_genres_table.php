<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGenresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('genres', function (Blueprint $table) {
            $table->id();
            $table->string('genre');
            $table->timestamps();
        });

        DB::table('genres')->insert([
        ['genre' => 'action'], 
        ['genre' => 'comedy'],
        ['genre' => 'thriller'],
        ['genre' => 'romance'],
        ['genre' => 'horror'],
        ['genre' => 'adventure'],
        ['genre' => 'scifi'],
        ['genre' => 'drama'],
        ['genre' => 'mystery'],
        ['genre' => 'fantasy'],
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('genres');
    }
}
