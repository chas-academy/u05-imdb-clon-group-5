<?php

namespace Database\Factories;

use App\Models\Movie;
use Illuminate\Database\Eloquent\Factories\Factory;

class MovieFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Movie::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => sentence(3),
            'rating' => rand(1,5),
            'director' => name(),
            'writer' => name(),
            'genres' => genre(),
            'description' => realText(),
            'img-url' => imageUrl($width = 640, $height = 480),
            'user_id' => User::all()->random()->id,
            'genres_id' => function () {
                // Get random genre id
                return App\Genre::inRandomOrder()->first()->genres_id;
            },
        ];
    }
}