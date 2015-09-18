<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class CreateProveedorRequest extends Request {

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		return [
		     'codigo' => 'required|min:6|unique:clientes,codigo',
		     'rif' => 'required|min:12|unique:clientes,rif',
		     'nombre' => 'required|min:3|',
		     'rol' => 'required',
			 'direccion' => 'required',
			 'telefono' => 'required',
		];
	}

}
