<?php


use Illuminate\Database\Seeder;



class AdminTableSeeder extends Seeder {

	public function run()
	{

           \DB::table('users')->insert(array (

         	  'name'     => 'Juan',
        	  'email'    => 'jumaov@hotmail.com',
        	  'password' => \Hash::make('123456')
     	));
	}
}