<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class CreateVentaRequest extends Request {

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
		     'fecha'    => 'required',
		     'nfactura' => 'required|unique:ventas,nfactura|',
		     'ncontrol' => 'required|unique:ventas,ncontrol|',
		     'nombre'   => 'required',
			 #'base1'    => 'required',
			 #'iva1'     => 'required',
			 #'total1'   => 'required',
			 #'exento'   => 'required',
			 #'base2'    => 'required',
			 #'iva2'     => 'required',
			 #'total2'   => 'required',
			 #'retenc'   => 'required',
			 #'notas'    => 'required',
		];
	}

}
