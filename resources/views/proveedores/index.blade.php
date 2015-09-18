@extends('app')

@section('content')
@if(Session::has('message'))
<div class="alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="close"><span aria-hidden="true">&times;</span>
  </button>
  {{Session::get('message')}}
</div>
@endif

     <h1>Proveedores Registrados</h1> 
     {!! link_to_route('proveedores.create', $title = 'Nuevo Proveedor',$parameters = null, $attributes = ['class' => 'btn btn-primary']) !!}
      
      {!! Form::open(['route' => 'proveedores.index', 'method' => 'GET', 'class' => 'navbar-form navbar-left pull-right', 'role' => 'search'])!!}
        <div class="form-group">
        {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' =>'Nombre del Proveedor']) !!}
        </div>
        {!! Form::button('Buscar', ['type' => 'submit', 'class' => 'btn btn-primary']) !!}
      {!! Form::close() !!}

     <table class="table table-bordered table-striped">
         <thead>
              <tr>
                  <th>Rif</th>
                  <th>Nombre</th>
                  <th>Direccion</th>
                  <th>Telefono</th>
                  <th>Email</th>
                  <th>Tipo</th>
                  <th>Operacion</th>
              </tr>
         </thead>
         <tbody>
              @foreach($proveedores as $proveedor)
                 <tr>
                     <td>{{ $proveedor->rif }}</td>
                     <td>{{ $proveedor->nombre }}</td>
                     <td>{{ $proveedor->direccion }}</td>
                     <td>{{ $proveedor->telefono }}</td>
                     <td>{{ $proveedor->email }}</td>
                     <td>{{ $proveedor->rol }}</td>
                     <td>
                     {!! link_to_route('proveedores.edit', $title = 'Editar', $parameters = $proveedor->id, $attributes = ['class' => 'btn btn-primary']) !!}
                     </td>
                 </tr>
              @endforeach
         </tbody>
      </table>

      {!! $proveedores->render() !!}

@endsection