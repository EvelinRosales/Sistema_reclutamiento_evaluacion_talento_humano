@extends ('layouts.admi')
@section ('contenido')
<div class="row">
	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
		<h3> Nuevo Registro </h3>
		@if (count($errors)>0)
		<div class="alert alert-danger">
			<ul>
			@foreach ($errors->all() as $error)
			  <li>{{$error}}</li>
			@endforeach
			</ul>
		</div>
		@endif

		{!!Form::open(array('url'=>'personal','method'=>'POST','autocomplete'=>'off'))!!}
		{{Form::token()}}
		<div class="form-group">
			<label for="nombres">Nombres</label>
			<input type="text" name="nombre" class="form-control" placeholder="Nombres....">
		</div>

		<div class="form-group">
			<label for="nombres">Apellido Paterno</label>
			<input type="text" name="nombre" class="form-control" placeholder="Apellido Paterno....">
		</div>

		<div class="form-group">
			<label for="nombres">Apellido Materno</label>
			<input type="text" name="nombre" class="form-control" placeholder="Apellido Materno....">
		</div>

		<div class="form-group">
			<label for="nombres">Genero</label>
			<input type="text" name="nombre" class="form-control" placeholder="Genero....">
		</div>

		<div class="form-group">
			<label for="nombres">Carnet de Identidad</label>
			<input type="text" name="nombre" class="form-control" placeholder="Carnet de Identidad....">
		</div>

		<div class="form-group">
			<label for="nombres">Numero de Celular</label>
			<input type="text" name="nombre" class="form-control" placeholder="Numero de Celular....">
		</div>


		{!!Form::close()!!}
	</div>
	
</div>


@endsection

