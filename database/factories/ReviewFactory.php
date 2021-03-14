<?php

namespace Database\Factories;

use App\Models\Review;
use Illuminate\Database\Eloquent\Factories\Factory;

class ReviewFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Review::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => \App\Models\User::inRandomOrder()->first()->id,
            'movie_id' => \App\Models\Movie::inRandomOrder()->first()->id,
            'review-title' => $this->faker->sentence($nbWords = 6, $variableNbWords = true),
            'review-text' => $this->faker->text($maxNbChars = 200)
        ];
    }
}
