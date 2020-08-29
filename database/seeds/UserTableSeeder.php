<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            'first-name' => $faker->word,
            'second-name' => $faker->word,
            'last-name' => $faker->word,
            'username' => $faker->userName,
            'profile' => $faker->word,
            'birthdate' => $faker->date(),
            'email' => $faker->safeEmail,
            'email_verified_at' => $faker->dateTime(),
            'password' => bcrypt($faker->password),
            'remember_token' => Str::random(10),
        ]);
    }
}
