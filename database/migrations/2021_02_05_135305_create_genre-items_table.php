<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGenreItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('genreitems', function (Blueprint $table) {
            $table->id();
            $table->foreignId('genres_id')->constrained();
            $table->foreignId('movies_id')->constrained();
            $table->timestamps();
        });
        // Artisan::call('db:seed', [
        //     '--class' => GenreItemTabelSeeder::class,
        // ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('genreitems');
    }
}
