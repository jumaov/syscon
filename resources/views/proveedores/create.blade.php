@extends('app')

@section('content')

   <h1>Registrar Proveedor</h1>

    {!! Form::open(['route' => 'proveedores.store', 'method'=>'POST']) !!}

       @include('proveedores.partials.form')

        <div class="form-group col-xs-12">
            {!! Form::button('Guardar', ['type' => 'submit', 'class' => 'btn btn-primary']) !!}
       </div>    

    {!! Form::close() !!}

@endsection