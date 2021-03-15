<?php

namespace Database\Factories;

use App\Models\Watchlist;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class WatchlistFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Watchlist::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {    
        return [
            'user_id' => \App\Models\User::inRandomOrder()->first()->id,
        ];
    }
}
