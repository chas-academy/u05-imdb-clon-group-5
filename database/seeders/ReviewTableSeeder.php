<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Review;

class ReviewTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*Review::create(array(
           'id' => 1,
           'user_id' => 1,
           'movie_id' => 3,
           'review-title' => 'Spiderman',
           'review-text' => 'Action',
         ));*/

         Review::factory()->create();
    }
}
