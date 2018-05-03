<?php

use Illuminate\Database\Seeder;

class DomainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('domains')->insert([
			'name' => str_random(10),
			'link' => str_random(10),
			'language' => str_random(10),
			'location' => str_random(10),
        ]);    
	
	}
}
