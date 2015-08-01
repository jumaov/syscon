<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProveedoresTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('proveedores', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('codigo',10)->unique();
			$table->string('rif',20)->unique();
			$table->string('nombre');
			$table->enum('rol', ['Nacional', 'Internacional']);
			$table->string('direccion');
			$table->string('telefono',100);
			$table->string('email')->unique()->nullable();
			$table->string('notas',1000)->nullable();
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('proveedores');
	}

}
