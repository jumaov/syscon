@extends('app)

@section('content')

     <h1>Clientes Registrados</h1>

     <table class="table table-bordered table-striped">
         <thead>
              <tr>
                  <th>#</th>
                  <th>Codigo</th>
                  <th>Rif</th>
                  <th>Nombre</th>
                  <th>Tipo</th>
                  <th>Dirección</th>
                  <th>Teléfono</th>
                  <th>Email</th>
                  <th>Notas</th>
              </tr>
         </thead>
         <tbody>
              @foreach($clientes as $cliente)
                 <tr>
                     <td>{{ $cliente->id }}</td>
                     <td>{{ $cliente->codigo }}</td>
                     <td>{{ $cliente->rif }}</td>
                     <td>{{ $cliente->nombre }}</td>
                     <td>{{ $cliente->rol }}</td>
                     <td>{{ $cliente->direccion }}</td>
                     <td>{{ $cliente->telefono }}</td>
                     <td>{{ $cliente->email }}</td>
                     <td>{{ $cliente->notas }}</td>
                 </tr>
              @endforeach
         </tbody>
      </table>

      {!! $clientes->render() !!}

@endsection