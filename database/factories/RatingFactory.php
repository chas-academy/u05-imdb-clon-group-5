<?php

namespace Database\Factories;

use App\Models\Rating;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;

class RatingFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Rating::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $rating = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
        return [
            'rating' => Arr::random($rating),
            // 'user_id' => User::factory(),
            'user_id' => \App\Models\User::inRandomOrder()->id,
            'movies_id' => \App\Models\Movie::inRandomOrder()->first()->id
        ];
    }
}
