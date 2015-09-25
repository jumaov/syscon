@extends('app')

@section('content')
@if(Session::has('message'))
<div class="alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="close"><span aria-hidden="true">&times;</span>
  </button>
  {{Session::get('message')}}
</div>
@endif

     <h1>Ventas Registradas</h1> 
     {!! link_to_route('ventas.create', $title = 'Nueva Venta',$parameters = null, $attributes = ['class' => 'btn btn-primary']) !!}

      {!! Form::open(['route' => 'ventas.index', 'method' => 'GET', 'class' => 'navbar-form navbar-left pull-right', 'role' => 'search'])!!}
        <div class="form-group">
        {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' =>'Busqueda x Cliente']) !!}
        </div>
        {!! Form::button('Buscar', ['type' => 'submit', 'class' => 'btn btn-primary']) !!}
      {!! Form::close() !!}

     <table class="table table-bordered table-striped">
         <thead>
              <tr>
                  <th>Fecha</th>
                  <th>Nro Factura</th>
                  <th>Nro Control</th>
                  <th>Cliente</th>
                  <th>Base 12 %</th>
                  <th>Iva 12 %</th>
                  <th>Total </th>
                  <th>Exento </th>
                  <th>Retencion </th>
                  <th>Operacion</th>
              </tr>
         </thead>
         @foreach($ventas as $venta)
         <tbody>
                 <tr>
                     <td>{{ $venta->fecha }}</td>
                     <td>{{ $venta->nfactura }}</td>
                     <td>{{ $venta->ncontrol }}</td>
                     <td>{{ $venta->nombre }}</td>
                     <td>{{ $venta->base1 }}</td>
                     <td>{{ $venta->iva1 }}</td>
                     <td>{{ $venta->total1 }}</td>
                     <td>{{ $venta->exento }}</td>
                     <td>{{ $venta->retenc }}</td>

                     <td>
                     {!! link_to_route('ventas.edit', $title = 'Editar', $parameters = $venta->id, $attributes = ['class' => 'btn btn-primary']) !!}
                     </td>
                 </tr>
         </tbody>
         @endforeach
      </table>

      {!! $ventas->render() !!}      

@endsection