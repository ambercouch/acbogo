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
        DB::table('users')->insert([
            'name' => Str::random(12),
            'email' => Str::random(12).'@gmail.com',
            'password' => bcrypt('secret'),
        ]);
    }
}
