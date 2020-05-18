<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::Table('users')->insert([
            'name' => str_random(5),
            'email' => str_random(10).'@gmail.com',
            'password' => bcrypt('secret'),
            'role_id' => random_int(1,3),
            'is_admin' => random_int(0,1)
        ]);
    }
}
