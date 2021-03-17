<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GenresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('genres')->insert([
            ['genre' => 'action'],
            ['genre' => 'comedy'],
            ['genre' => 'thriller'],
            ['genre' => 'romance'],
            ['genre' => 'horror'],
            ['genre' => 'adventure'],
            ['genre' => 'scifi'],
            ['genre' => 'drama'],
            ['genre' => 'mystery'],
            ['genre' => 'fantasy'],
        ]);
    }
}
