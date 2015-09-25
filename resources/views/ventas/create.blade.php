@extends('app')

@section('content')

   <h1>Registrar Ventas</h1>
<br>
<br>

    {!! Form::open(['route' => 'ventas.store', 'method'=>'POST']) !!}

        @include('ventas.partials.form')

        <div class="form-group col-xs-12">
            {!! Form::button('Guardar', ['type' => 'submit', 'class' => 'btn btn-primary']) !!}
       </div>    

    {!! Form::close() !!}

@endsection