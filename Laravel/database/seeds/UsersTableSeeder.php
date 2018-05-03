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
            'name' => 'Youssef',
            'email' => 'youssefzaki@gmail.com',
            'password' => bcrypt('secret'),
        ]);

	}
}
