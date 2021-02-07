<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMoviesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movies', function (Blueprint $table) {
            $table->id();
            $table->string('title', 30);
            $table->unsignedTinyInteger('rating')->nullable();
            $table->string('director', 30)->nullable();
            $table->string('writer', 30)->nullable();
            $table->text('description')->nullable();
            $table->string('img-url')->nullable();
            // $table->foreignId('genre-id')->constrained();
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
        Schema::dropIfExists('movies');
    }
}
