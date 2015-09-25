@extends('app')

@section('content')
@if(Session::has('message'))
<div class="alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="close"><span aria-hidden="true">&times;</span>
  </button>
  {{Session::get('message')}}
</div>
@endif

     <h1>Compras Registradas</h1> 
     {!! link_to_route('compras.create', $title = 'Nueva Compra',$parameters = null, $attributes = ['class' => 'btn btn-primary']) !!}

      {!! Form::open(['route' => 'compras.index', 'method' => 'GET', 'class' => 'navbar-form navbar-left pull-right', 'role' => 'search'])!!}
        <div class="form-group">
        {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' =>'Busqueda x Proveedor']) !!}
        </div>
        {!! Form::button('Buscar', ['type' => 'submit', 'class' => 'btn btn-primary']) !!}
      {!! Form::close() !!}

     <table class="table table-bordered table-striped">
         <thead>
              <tr>
                  <th>Fecha</th>
                  <th>Nro Factura</th>
                  <th>Nro Control</th>
                  <th>Proveedor</th>
                  <th>Base 12 %</th>
                  <th>Iva 12 %</th>
                  <th>Total </th>
                  <th>Exento </th>
                  <th>Retencion </th>
                  <th>Operacion</th>
              </tr>
         </thead>
         @foreach($compras as $compra)
         <tbody>
                 <tr>
                     <td>{{ $compra->fecha }}</td>
                     <td>{{ $compra->nfactura }}</td>
                     <td>{{ $compra->ncontrol }}</td>
                     <td>{{ $compra->nombre }}</td>
                     <td>{{ $compra->base1 }}</td>
                     <td>{{ $compra->iva1 }}</td>
                     <td>{{ $compra->total1 }}</td>
                     <td>{{ $compra->exento }}</td>
                     <td>{{ $compra->retenc }}</td>

                     <td>
                     {!! link_to_route('compras.edit', $title = 'Editar', $parameters = $compra->id, $attributes = ['class' => 'btn btn-primary']) !!}
                     </td>
                 </tr>
         </tbody>
         @endforeach
      </table>

      {!! $compras->render() !!}      

@endsection