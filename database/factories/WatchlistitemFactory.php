<?php

namespace Database\Factories;

use App\Models\Watchlistitem;
use Illuminate\Database\Eloquent\Factories\Factory;

class WatchlistitemFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Watchlistitem::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'watchlists_id' => \App\Models\Watchlist::inRandomOrder()->first()->id,
            'movies_id' => \App\Models\Movie::inRandomOrder()->first()->id,
        ];
    }
}
