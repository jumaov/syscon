@extends('app')

@section('content')

    <h1>Editar Ventas</h1>

    {!! Form::model($venta,['route'=> ['ventas.update',$venta->id],'method'=>'PUT']) !!}

       @include('ventas.partials.form')

       <div class="form-group col-xs-12">
            {!! Form::button('Actualizar', ['type' => 'submit', 'class' => 'btn btn-primary']) !!}
       </div>    
     {!! Form::close() !!}

    {!! Form::open(['route'=> ['ventas.destroy',$venta->id],'method'=>'DELETE']) !!}
       <div class="form-group col-xs-12">
            {!! Form::button('Eliminar', ['type' => 'submit', 'class' => 'btn btn-danger']) !!}
       </div>    
    {!! Form::close() !!}
@endsection