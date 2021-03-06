<?php

use Illuminate\Database\Seeder;

use Faker\Factory as Faker;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
 
    	for($i = 1; $i <= 50; $i++){
    		DB::table('users')->insert([
    			'name' => $faker->name,
    			'email' => $faker->email,
    			'nip' => $faker->randomNumber,
    			'role' => $faker->numberBetween(2, 5),
    			'handphone' => $faker->phoneNumber,
    			'alamat' => $faker->address,
    			'password' => bcrypt('secret'),
    		]);
 
    	}
    }
}
