@extends('app')

@section('content')

   <h1>Registrar Compras</h1>
<br>
<br>

    {!! Form::open(['route' => 'compras.store', 'method'=>'POST']) !!}

        @include('compras.partials.form')

        <div class="form-group col-xs-12">
            {!! Form::button('Guardar', ['type' => 'submit', 'class' => 'btn btn-primary']) !!}
       </div>    

    {!! Form::close() !!}

@endsection