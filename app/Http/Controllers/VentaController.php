<?php namespace App\Http\Controllers;

use App\Http\Requests\CreateVentaRequest;
use App\Http\Controllers\Controller;
use App\Venta;
use App\User;
use Illuminate\Http\Request;
use Session;
use Redirect;
use Auth;


class VentaController extends Controller {
	
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
	    #dd($request->get('name'));

		#$ventas = Venta::orderBy('fecha','asc')->paginate(4);
		$ventas = Venta::name($request->get('name'))->orderby('fecha', 'asc')->paginate(4);

		return view('ventas.index', compact('ventas'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('ventas.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(CreateVentaRequest $request)
	{
	    #$venta = Venta::create($request->all());
	    #return "La venta $venta ->fue registrada.";		
        $venta = new Venta($request->all()); 
	    $venta->user_id = Auth::user()->id;
	    $venta->save();
	    Session::flash('message','Venta Creada Correctamente');
	    return Redirect::to('ventas');
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
		$venta = Venta::find($id);
		return view('ventas.edit', ['venta' =>$venta]);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id,Request $request)
	{
		$venta = venta::find($id);
		$venta->fill($request->all());
		$venta->save();
        Session::flash('message','Venta Actualizada Correctamente');
		return Redirect::to('/ventas');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Venta::destroy($id);
        Session::flash('message','Venta Eliminada Correctamente');
		return Redirect::to('/ventas');
	}

}
