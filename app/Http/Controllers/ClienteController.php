<?php namespace App\Http\Controllers;

use App\Http\Requests\CreateClienteRequest;
use App\Http\Controllers\Controller;
use App\Cliente;
use App\User;
use Illuminate\Http\Request;
use Session;
use Redirect;
use Auth;

class ClienteController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$clientes = Cliente::orderby('nombre', 'asc')->paginate(5);

		return view('clientes.index', compact('clientes'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('clientes.create');

	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(CreateClienteRequest $request)
	{
	    #$cliente = Cliente::create($request->all());
	    $cliente = new Cliente($request->all()); 
	    $cliente->user_id = Auth::user()->id;
	    $cliente->save();
	    Session::flash('message','Cliente Creado Correctamente');
	    return Redirect::to('clientes');
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
		$cliente = cliente::find($id);
		return view('clientes.edit', ['cliente' =>$cliente]);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id,Request $request)
	{
		$cliente = cliente::find($id);
		$cliente->fill($request->all());
		$cliente->save();
        Session::flash('message','Cliente Actualizado Correctamente');
		return Redirect::to('/clientes');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Cliente::destroy($id);
        Session::flash('message','Cliente Eliminado Correctamente');
		return Redirect::to('/clientes');
    }

}
