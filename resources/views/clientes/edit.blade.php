@extends('app')

@section('content')

    <h1>Editar Cliente</h1>

    {!! Form::model($cliente,['route'=> ['clientes.update',$cliente->id],'method'=>'PUT']) !!}

       @include('clientes.partials.form')

       <div class="form-group col-xs-12">
            {!! Form::button('Actualizar', ['type' => 'submit', 'class' => 'btn btn-primary']) !!}
       </div>    
     {!! Form::close() !!}

    {!! Form::open(['route'=> ['clientes.destroy',$cliente->id],'method'=>'DELETE']) !!}
       <div class="form-group col-xs-12">
            {!! Form::button('Eliminar', ['type' => 'submit', 'class' => 'btn btn-danger']) !!}
       </div>    
    {!! Form::close() !!}
@endsection