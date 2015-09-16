@extends('app')

@section('content')
@if(Session::has('message'))
<div class="alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="close"><span aria-hidden="true">&times;</span>
  </button>
  {{Session::get('message')}}
</div>
@endif

     <h1>Clientes Registrados</h1> 
     {!! link_to_route('clientes.create', $title = 'Nuevo Cliente',$parameters = null, $attributes = ['class' => 'btn btn-primary']) !!}

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
              @foreach($clientes as $cliente)
                 <tr>
                     <td>{{ $cliente->rif }}</td>
                     <td>{{ $cliente->nombre }}</td>
                     <td>{{ $cliente->direccion }}</td>
                     <td>{{ $cliente->telefono }}</td>
                     <td>{{ $cliente->email }}</td>
                     <td>{{ $cliente->rol }}</td>
                     <td>
                     {!! link_to_route('clientes.edit', $title = 'Editar', $parameters = $cliente->id, $attributes = ['class' => 'btn btn-primary']) !!}
                     </td>
                 </tr>
              @endforeach
         </tbody>
      </table>

      {!! $clientes->render() !!}

@endsection