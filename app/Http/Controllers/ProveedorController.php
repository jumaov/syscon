<?php namespace App\Http\Controllers;

use App\Http\Requests\CreateProveedorRequest;
use App\Http\Controllers\Controller;
use App\Proveedor;
use App\User;
use Illuminate\Http\Request;
use Session;
use Redirect;
use Auth;


class ProveedorController extends Controller {

	public function __construct()
	{
        $this->middleware('auth');
    }

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index(Request $request)
    {
        
  		$proveedores = Proveedor::name($request->get('name'))->orderby('nombre', 'asc')->paginate(4);

		return view('proveedores.index', compact('proveedores'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('proveedores.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(CreateProveedorRequest $request)
	{
	    $Proveedor = new Proveedor($request->all()); 
	    $Proveedor->user_id = Auth::user()->id;
	    $Proveedor->save();
	    Session::flash('message','Proveedor Creado Correctamente');
	    return Redirect::to('proveedores');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$proveedor = proveedor::find($id);
		return view('proveedores.edit', ['proveedor' =>$proveedor]);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id,Request $request)
	{
		$proveedor = proveedor::find($id);
		$proveedor->fill($request->all());
		$proveedor->save();
        Session::flash('message','Proveedor Actualizado Correctamente');
		return Redirect::to('/proveedores');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Proveedor::destroy($id);
        Session::flash('message','Proveedor Eliminado Correctamente');
		return Redirect::to('/proveedores');
	}

}
