<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model {

	protected $table = 'clientes';

	protected $fillable = [
	      'codigo', 'rif', 'nombre', 'rol', 'direccion', 'telefono', 'email', 'notas'
	];


    } #Cliente