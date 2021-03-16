<?php

namespace Database\Factories;

use App\Models\Genreitem;
use Illuminate\Database\Eloquent\Factories\Factory;

class GenreitemFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Genreitem::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'genres_id' => \App\Models\Genre::inRandomOrder()->first()->id,
            'movies_id' => \App\Models\Movie::inRandomOrder()->first()->id
        ];
    }
}
