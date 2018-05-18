<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert(
            [
                'name' => "Brian",
                'email' => "mwathibrian7@gmail.com",
                'password' => bcrypt('secret'),
            ]);
        DB::table('users')->insert(
            [
                'name' => "Test User",
                'email' => "codeclean31@gmail.com",
                'password' => bcrypt('123456'),
            ]);
    }
}
