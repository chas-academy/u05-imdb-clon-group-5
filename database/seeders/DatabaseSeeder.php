<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(10)->create();
        \App\Models\Rating::factory(10)->create();
        \App\Models\Review::factory(10)->create();
        \App\Models\Watchlist::factory(10)->create(); // If changed amount of watchlists, also change max number in WatchlistFactory.php under definition().
        \App\Models\Watchlistitem::factory(1000)->create();
        \App\Models\Genreitem::factory(10)->create();
    }
}
