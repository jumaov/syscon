<?php namespace App\Http\Controllers;

use App\Http\Requests\CreateCompraRequest;
use App\Http\Controllers\Controller;
use App\Compra;
use App\User;
use Illuminate\Http\Request;
use Session;
use Redirect;
use Auth;

class CompraController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index(Request $request)
	{
	    #dd($request->get('name'));

		#$compras = Compra::orderBy('fecha','asc')->paginate(4);
		$compras = Compra::name($request->get('name'))->orderby('fecha', 'asc')->paginate(4);

		return view('compras.index', compact('compras'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('compras.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(CreateCompraRequest $request)
	{
        $compra = new Compra($request->all()); 
	    $compra->user_id = Auth::user()->id;
	    $compra->save();
	    Session::flash('message','Compra Creada Correctamente');
	    return Redirect::to('compras');
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
		$compra = Compra::find($id);
		return view('compras.edit', ['compra' =>$compra]);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id,Request $request)
	{
		$compra = compra::find($id);
		$compra->fill($request->all());
		$compra->save();
        Session::flash('message','Compra Actualizada Correctamente');
		return Redirect::to('/compras');
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Compra::destroy($id);
        Session::flash('message','Compra Eliminada Correctamente');
		return Redirect::to('/compras');
	}

}
