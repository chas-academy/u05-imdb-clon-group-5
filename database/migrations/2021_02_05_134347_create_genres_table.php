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
        Schema::dropIfExists('genres');
        Schema::create('genres', function (Blueprint $table) {
            $table->id();
            $table->string('genre');
            $table->timestamps();
            $table->foreignId('genres_id')->unsigned()->nullable();
        });

        DB::table('genres')->insert([
        ['genre' => 'Action'], 
        ['genre' => 'Comedy'],
        ['genre' => 'Thriller'],
        ['genre' => 'Romance'],
        ['genre' => 'Horror'],
        ['genre' => 'Adventure'],
        ['genre' => 'Scifi'],
        ['genre' => 'Drama'],
        ['genre' => 'Mystery'],
        ['genre' => 'Fantasy'],
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
