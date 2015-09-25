@extends('app')

@section('content')

    <h1>Editar Compras</h1>

    {!! Form::model($compra,['route'=> ['compras.update',$compra->id],'method'=>'PUT']) !!}

       @include('compras.partials.form')

       <div class="form-group col-xs-12">
            {!! Form::button('Actualizar', ['type' => 'submit', 'class' => 'btn btn-primary']) !!}
       </div>    
     {!! Form::close() !!}

    {!! Form::open(['route'=> ['compras.destroy',$compra->id],'method'=>'DELETE']) !!}
       <div class="form-group col-xs-12">
            {!! Form::button('Eliminar', ['type' => 'submit', 'class' => 'btn btn-danger']) !!}
       </div>    
    {!! Form::close() !!}
@endsection