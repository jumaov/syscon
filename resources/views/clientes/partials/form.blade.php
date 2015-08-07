<div class="col-sm-6">
	
	  <div class="form-group">
	  	  {!! Form::text('codigo', null, ['class' => 'form-control floating-label', 'placeholder' => 'Codigo:']) !!}
	  </div>

	  <div class="form-group">
	  	  {!! Form::text('rif', null, ['class' => 'form-control floating-label', 'placeholder' => 'Rif:']) !!}
	  </div>

	  <div class="from-group">
	  	  {!! Form::text('nombre', null, ['class' => 'form-control floating-label', 'placeholder' => 'Nombre:']) !!}
	  </div>

	  <div class="form-group">
	  	  {!! Form::select('rol',
	  	      ['nacional' =>'Nacional', 'internacional' => 'Internacional'],
	  	      null,
	  	      ['class' => 'form-control floating-label', 'placeholder' => 'Tipo:']) !!}
	  </div>

	  <div class="form-group">
	  	  {!! Form::text('direccion', null, ['class' => 'form-control floating-label', 'placeholder' => 'Dirección:'])!!}
	  </div>

	  <div class="form-group">
	  	  {!! Form::text('telefono', null, ['class' => 'form-control floating-label', 'placeholder' => 'Teléfono:'])!!}
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