<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model {

	protected $table = 'proveedores';

	protected $fillable = [
          'codigo', 'rif', 'nombre', 'rol', 'direccion', 'telefono', 'email', 'notas'
	];

} #Proveedor
