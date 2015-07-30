@extends('layouts.principal')

@section('content')
	<?php echo $pais;?>
	@if(isset($pais))
		@if(isset($_GET['accion']) and $_GET['accion'] == 'eliminar')
			{!!Form::model($pais,['route'=>['pais.destroy',$pais->idPais],'method'=>'DELETE'])!!}
		@else
			{!!Form::model($pais,['route'=>['pais.update',$pais->idPais],'method'=>'PUT'])!!}
		@endif
	@else
		{!!Form::open(['route'=>'pais.store','method'=>'POST'])!!}
	@endif
		<div class="form-group">
			{!!Form::label('Id')!!}
			{!!Form::text('idPais',null,['class'=>'form-control','placeholder'=>'Ingresa el código del país'])!!}
		</div>
		<div class="form-group">
			{!!Form::label('C&oacute;digo')!!}
			{!!Form::text('codigoPais',null,['class'=>'form-control','placeholder'=>'Ingresa el código del país'])!!}
		</div>
		<div class="form-group">
			{!!Form::label('Nombre')!!}
			{!!Form::text('nombrePais',null,['class'=>'form-control','placeholder'=>'Ingresa el nombre del país'])!!}
		</div>
	{!!Form::submit('Grabar',["class"=>"btn btn-primary"])!!}

@stop