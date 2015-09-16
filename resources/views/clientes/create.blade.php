@extends('app')

@section('content')

   <h1>Registrar Cliente</h1>

    {!! Form::open(['route' => 'clientes.store', 'method'=>'POST']) !!}

       @include('clientes.partials.form')

       <div class="form-group col-xs-12">
            {!! Form::button('Guardar', ['type' => 'submit', 'class' => 'btn btn-primary']) !!}
       </div>    

    {!! Form::close() !!}

@endsection