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
            //Titles and names can be greater than 30.
            $table->string('title', 100);
            $table->string('director', 50)->nullable();
            $table->string('writer', 50)->nullable();
            //Changed description text -> longText.
            $table->longText('description')->nullable();
            $table->year('year')->nullable();
            $table->time('runtime')->nullable();
            $table->date('release_date')->nullable();
            $table->longText('img')->nullable();
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
