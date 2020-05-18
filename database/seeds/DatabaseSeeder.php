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
//        DB::Table('users')->insert([
//            'name' => Str::random(5),
//            'email' => Str::random(10).'@gmail.com',
//            'password' => bcrypt('secret'),
//            'role_id' => random_int(1,3),
//            'is_admin' => random_int(0,1)
//        ]);

//        $items = [
//            ['id' => 1, 'title' => 'Administrator', 'description' => 'This user has no limit'],
//            ['id' => 2, 'title' => 'Editor', 'This user can read and write'],
//            ['id' => 3, 'title' => 'User', 'This user can read'],
//        ];
//        foreach ($items as $item) {
//            Role::updateOrCreate(['id' => $item['id']], $item);
//        }
    }
}
