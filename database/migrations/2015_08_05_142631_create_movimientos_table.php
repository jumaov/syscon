<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMovimientosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('movimientos', function(Blueprint $table)
		{
			$table->increments('id');
            $table->enum('tipo', ['Compra', 'Venta']);
            $table->date('fecha');
            $table->string('nfactura',20);
            $table->string('ncontrol',20);
            $table->string('nombre');
            $table->decimal('base', 12, 2);
            $table->decimal('iva', 12, 2);
            $table->decimal('exento', 12, 2);
            $table->decimal('total', 12, 2);
            $table->integer('cliente_id')->unsigned();
			$table->integer('proveedor_id')->unsigned();
            $table->integer('user_id')->unsigned();
			$table->timestamps();

			$table->foreign('cliente_id')
			->references('id')->on('clientes')
			->onUpdate('CASCADE')
            ->onDelete('NO ACTION');

            $table->foreign('proveedor_id')
			->references('id')->on('proveedores')
			->onUpdate('CASCADE')
            ->onDelete('NO ACTION');

            $table->foreign('user_id')
			->references('id')->on('users')
			->onUpdate('CASCADE')
            ->onDelete('NO ACTION');

           
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('movimientos');
	}
    
    }
