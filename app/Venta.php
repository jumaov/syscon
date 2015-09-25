<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Venta extends Model {

	protected $table = 'ventas';

    protected $fillable = [
    'fecha', 
    'nfactura', 
    'ncontrol', 
    'nombre', 
    'base1',
    'iva1', 
    'total1', 
    'exento',
    'base2',
    'iva2',
    'total2',
    'retenc',
    'notas'];

    public function user()
	{
		return $this->belongsTo('App\User');
	}


    public function scopeName($query, $name)
    {
        if (trim($name) != "")
        $query->where('nombre', "LIKE", "%$name%");

    }    




} # Venta
