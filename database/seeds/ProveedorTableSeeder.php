<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;


class ProveedorTableSeeder extends Seeder {

	public function run()

	{
		$faker = Faker::create();

	    for($i = 0; $i < 50; $i ++)
    {

        \DB::table('proveedores')->insert(array (
          'codigo'     => $faker->bothify('CODIGO ##??'),
          'rif'        => $faker->numerify('J-########-#'),
          'nombre'     => $faker->name,
          'rol'        => $faker->randomElement(['Nacional','Internacional']),
          'direccion'  => $faker->streetAddress,
          'telefono'   => $faker->tollFreePhoneNumber,
      	  'email'      => $faker->unique()->email,
          'user_id'    => '1'



      	));
	}
}
}