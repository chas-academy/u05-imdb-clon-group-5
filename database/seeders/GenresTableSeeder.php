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
            ['genre' => 'Action'],
            ['genre' => 'Comedy'],
            ['genre' => 'Thriller'],
            ['genre' => 'Romance'],
            ['genre' => 'Horror'],
            ['genre' => 'Adventure'],
            ['genre' => 'Scifi'],
            ['genre' => 'Drama'],
            ['genre' => 'Mystery'],
            ['genre' => 'Fantasy'],
        ]);
    }
}
