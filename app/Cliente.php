<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model {

	protected $table = 'clientes';

	protected $fillable = ['codigo', 'rif', 'nombre', 'rol', 'direccion', 'telefono', 'email', 'notas'];

	public function user()
	{
		return $this->belongsTo('App\User');
	}

	public function scopeName($query, $name)
	{
        if (trim($name) != "")
		$query->where('nombre', "LIKE", "%$name%");

    }


    } #Cliente