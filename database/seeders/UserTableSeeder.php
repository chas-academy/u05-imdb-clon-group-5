<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use App\Models\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create(array(
            'id' => 2,
            'name' => 'Emma Eriksson',
           'email' => 'emma@info.se',
           'email_verified_at' => '2014-06-23',
           'password' => 'Emma123',
         ));

         User::create(array(
            'id' => 3,
            'name' => 'Patrik “Putte” Johansson',
           'email' => 'johansson@info.se',
           'email_verified_at' => '2015-06-23',
           'password' => 'Patrik123',
         ));

         User::create(array(
            'id' => 4,
            'name' => 'Charlotte “Lotten” Åkerberg ',
           'email' => 'akerberg@info.se',
           'email_verified_at' => '2018-06-23',
           'password' => 'Charlotte123',
         ));
    }
}
