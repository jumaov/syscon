<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVentasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ventas', function(Blueprint $table)
		{
			$table->increments('id');
            $table->date('fecha');
            $table->string('nfactura',20);
            $table->string('ncontrol',20);
            $table->string('nombre');
            $table->decimal('base1', 12, 2);
            $table->decimal('iva1', 12, 2);
            $table->decimal('total1', 12, 2);
            $table->decimal('exento', 12, 2);
            $table->decimal('base2', 12, 2);
            $table->decimal('iva2', 12, 2);
            $table->decimal('total2', 12, 2);
            $table->decimal('retenc', 12, 2);
			$table->string('notas',1000)->nullable();
			$table->integer('user_id')->unsigned();	              
			$table->timestamps();


            $table->foreign('user_id')
			->references('id')->on('users')
			->onUpdate('CASCADE')
            ->onDelete('CASCADE');

		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
    DB::statement('SET FOREIGN_KEY_CHECKS = 0');
    Schema::dropIfExists('ventas');
    DB::statement('SET FOREIGN_KEY_CHECKS = 1');
	}

}
