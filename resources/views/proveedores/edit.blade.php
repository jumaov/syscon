@extends('app')

@section('content')

    <h1>Editar Proveedor</h1>

    {!! Form::model($proveedor,['route'=> ['proveedores.update',$proveedor->id],'method'=>'PUT']) !!}

       @include('proveedores.partials.form')

       <div class="form-group col-xs-12">
            {!! Form::button('Actualizar', ['type' => 'submit', 'class' => 'btn btn-primary']) !!}
       </div>    
     {!! Form::close() !!}

    {!! Form::open(['route'=> ['proveedores.destroy',$proveedor->id],'method'=>'DELETE']) !!}
       <div class="form-group col-xs-12">
            {!! Form::button('Eliminar', ['type' => 'submit', 'class' => 'btn btn-danger']) !!}
       </div>    
    {!! Form::close() !!}
@endsection