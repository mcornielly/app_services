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
        factory(App\User::class)->create(); 
    	
        App\User::create([
        	'name' => 'Miguel Angel Cornielly',
        	'email' => 'mcornielly@gmail.com',
        	'password' => bcrypt('123123'),
        ]);
    }
}
