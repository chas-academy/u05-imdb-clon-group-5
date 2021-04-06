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
            $table->unsignedSmallInteger('rating')->nullable();
            $table->longText('description')->nullable();
            $table->year('year')->nullable();
            $table->float('runtime', 4, 2)->nullable();
            $table->date('release_date')->nullable();
            $table->longText('img')->nullable();
            $table->boolean('featured')->default(false);
            $table->timestamps();
        });

        // Artisan::call('db:seed', [
        //     '--class' => MoviesTableSeeder::class,
        // ]);
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
