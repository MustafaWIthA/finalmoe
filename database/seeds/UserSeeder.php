<?php
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'first_name' => 'mustafa',
            'second_name' => 'abdi',
            'last_name' => Str::random(10),
            'username' => Str::random(10),
            'profile' => Str::random(10),
            'birthdate' => now(),
            'email' => 'mustafa.abdsh@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'remember_token' => Str::random(10),
        ]);
    }            

}
