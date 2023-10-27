<?php

use Faker\Generator as faker;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {

        $myUser = new \App\User();
        $myUser->admin = true;
        $myUser->name = 'xndr';
        $myUser->email = 'mymails.xander@gmail.com';
        $myUser->password = \Illuminate\Support\Facades\Hash::make('0');
        $myUser->save();

        $numberOfUsers = 100;
        for ($i = 0; $i < $numberOfUsers; $i++) {

            $newUser = new \App\User();
            $newUser->admin = false;
            $newUser->name = $faker->name;
            $newUser->email = $faker->unique()->safeEmail;
            $newUser->password = bcrypt('password');
            $newUser->created_at = now();
            $newUser->updated_at = now();
            $newUser->save();
        }
    }
}
