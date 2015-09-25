<div class="col-sm-4">

	<p>	------------------------INFORMACION  GENERAL------------------------</p>
	  <div class="form-group">
	  	  {!! Form::date('fecha', null, ['class' => 'form-control floating-label', 'placeholder' => '', 'required']) !!}
	  	  @if($errors->has('fecha'))
	  	     <p class="text-danger">{{ $errors->first('fecha') }}</p>
	  	  @endif
	  </div>

	  <div class="form-group">
	  	  {!! Form::text('nfactura', null, ['class' => 'form-control floating-label', 'placeholder' => 'Nro Factura:', 'required']) !!}
	  	  @if($errors->has('nfactura'))
	  	     <p class="text-danger">{{ $errors->first('nfactura') }}</p>
	  	  @endif
	  </div>

	  <div class="form-group">
	  	  {!! Form::text('ncontrol', null, ['class' => 'form-control floating-label', 'placeholder' => 'Nro Control:', 'required']) !!}
	  	  @if($errors->has('ncontrol'))
	  	     <p class="text-danger">{{ $errors->first('ncontrol') }}</p>
	  	  @endif
	  </div>

	  <div class="form-group">
	  	  {!! Form::text('nombre', null, ['class' => 'form-control floating-label', 'placeholder' => 'Proveedor:', 'required']) !!}
	  	  @if($errors->has('nombre'))
              <p class="text-danger">{{ $errors->first('nombre') }}</p>
	  	  @endif
	  </div>
</div> 

<div class="col-sm-4">

	<p>	----------------------IVA 12% Y MONTO EXENTO----------------------</p>
	  <div class="form-group">
	  	 {!! Form::input('number', 'base1', '', array('class' => 'form-control floating-label', 'placeholder' => 'Base:', 
	  	 'min' => '0.01', 'step' => '0.01', 'max' => '99999999999999.99')) !!}
	  	    @if($errors->has('base1'))
	  	     <p class="text-danger">{{ $errors->first('base1') }}</p>
	  	    @endif
	  </div>

	  <div class="form-group">
	  	 {!! Form::input('number', 'iva1', '', array('class' => 'form-control floating-label', 'placeholder' => 'IVA :', 
	  	 'min' => '0.01', 'step' => '0.01', 'max' => '99999999999999.99')) !!}
	  	    @if($errors->has('iva1'))
	  	     <p class="text-danger">{{ $errors->first('iva1') }}</p>
	  	    @endif
	  </div>

	  <div class="form-group">
	  	 {!! Form::input('number', 'total1', '', array('class' => 'form-control floating-label', 'placeholder' => 'Base + IVA:', 
	  	 'min' => '0.01', 'step' => '0.01', 'max' => '99999999999999.99')) !!}
	  	    @if($errors->has('total1'))
	  	     <p class="text-danger">{{ $errors->first('total1') }}</p>
	  	    @endif
	  </div>

	  <div class="form-group">
	  	 {!! Form::input('number', 'exento', '', array('class' => 'form-control floating-label', 'placeholder' => 'Exento:', 
	  	 'min' => '0.01', 'step' => '0.01', 'max' => '99999999999999.99')) !!}
	  	    @if($errors->has('exento'))
	  	     <p class="text-danger">{{ $errors->first('exento') }}</p>
	  	    @endif
	  </div>	  
</div> 

<div class="col-sm-4">
<p>	--------------------IVA 8% Y MONTO RETENCION--------------------</p>

	  <div class="form-group">
	  	 {!! Form::input('number', 'base2', '', array('class' => 'form-control floating-label', 'placeholder' => 'Base:', 
	  	 'min' => '0.01', 'step' => '0.01', 'max' => '99999999999999.99')) !!}
	  	    @if($errors->has('base2'))
	  	     <p class="text-danger">{{ $errors->first('base2') }}</p>
	  	    @endif
	  </div>

	  <div class="form-group">
	  	 {!! Form::input('number', 'iva2', '', array('class' => 'form-control floating-label', 'placeholder' => 'IVA:', 
	  	 'min' => '0.01', 'step' => '0.01', 'max' => '99999999999999.99')) !!}
	  	    @if($errors->has('iva2'))
	  	     <p class="text-danger">{{ $errors->first('iva2') }}</p>
	  	    @endif
	  </div>

	  <div class="form-group">
	  	 {!! Form::input('number', 'total2', '', array('class' => 'form-control floating-label', 'placeholder' => 'Base + IVA:', 
	  	 'min' => '0.01', 'step' => '0.01', 'max' => '99999999999999.99')) !!}
	  	    @if($errors->has('total2'))
	  	     <p class="text-danger">{{ $errors->first('total2') }}</p>
	  	    @endif
	  </div>

	  <div class="form-group">
	  	 {!! Form::input('number', 'retenc', '', array('class' => 'form-control floating-label', 'placeholder' => 'Retenido:', 
	  	 'min' => '0.01', 'step' => '0.01', 'max' => '99999999999999.99')) !!}
	  	    @if($errors->has('retenc'))
	  	     <p class="text-danger">{{ $errors->first('retenc') }}</p>
	  	    @endif
	  </div>
</div> 
<div class="col-sm-12">	  
	  <div class="form-group">
	  	  {!! Form::textarea('notas', null, [ 'class' =>'form-control floating-label', 'rows' =>'7', 'placeholder' => 'Comentario de la Compra:']) !!}
	  </div>
</div> 