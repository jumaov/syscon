<div class="col-sm-6">
	
	  <div class="form-group">
	  	  {!! Form::text('codigo', null, ['class' => 'form-control floating-label', 'placeholder' => 'Codigo:', 'required']) !!}
	  	  @if($errors->has('codigo'))
	  	     <p class="text-danger">{{ $errors->first('codigo') }}</p>
	  	  @endif
	  </div>

	  <div class="form-group">
	  	  {!! Form::text('rif', null, ['class' => 'form-control floating-label', 'placeholder' => 'Rif:', 'required']) !!}
	  	  @if($errors->has('rif'))
	  	     <p class="text-danger">{{ $errors->first('rif') }}</p>
	  	  @endif
	  </div>

	  <div class="from-group">
	  	  {!! Form::text('nombre', null, ['class' => 'form-control floating-label', 'placeholder' => 'Nombre:', 'required']) !!}
	  	    @if($errors->has('nombre'))
	  	     <p class="text-danger">{{ $errors->first('nombre') }}</p>
	  	    @endif
	  </div>

	  <div class="form-group">
	  	  {!! Form::select('rol',
	  	      ['nacional' =>'Nacional', 'internacional' => 'Internacional'],
	  	      null,
	  	      ['class' => 'form-control floating-label', 'placeholder' => 'Tipo:']) !!}
      </div>

	  <div class="form-group">
	  	  {!! Form::text('direccion', null, ['class' => 'form-control floating-label', 'placeholder' => 'Dirección:', 'required'])!!}
	  	    @if($errors->has('direccion'))
	  	      <p class="text-danger">{{ $errors->first('direccion') }}</p>
	  	    @endif
	  </div>

	  <div class="form-group">
	  	  {!! Form::text('telefono', null, ['class' => 'form-control floating-label', 'placeholder' => 'Teléfono:', 'required'])!!}
	  	    @if($errors->has('telefono'))
	  	     <p class="text-danger">{{ $errors->first('telefono') }}</p>
	  	    @endif
	  </div>

</div> 

<div class="col-sm-6">

	  <div class="form-group">
	  	  {!! Form::email('email', null, ['class' => 'form-control floating-label', 'placeholder' => 'Email:'])!!}
	  </div>

	  <div class="form-group">
	  	  {!! Form::textarea('notas', null, [ 'class' =>'form-control floating-label', 'rows' =>'8', 'placeholder' => 'Notas:'])!!}
	  </div>
</div> 