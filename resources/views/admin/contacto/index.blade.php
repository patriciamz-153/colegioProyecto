@extends('layouts.admin')




@section ("content")

<div class="row" id="app">
        <div class="panel panel-info">

                <div class="panel-heading text-center">
                     <h3>Contactenos</h3>
                 </div>
<div class="container">
	@if (count($errors) > 0)
	<div class="alert alert-danger" role="alert">
		* {{ $errors->first('nombre')}} 
		<br>
		* {{ $errors->first('email')}}
		<br>
		* {{ $errors->first('text')}}
	</div>
	@endif
	<form method="POST">
		<input type="hidden" id="_token" name="_token" value="{{ csrf_token() }}">
	  	<div class="form-group">
	    	<label for="nombre">Nombres Completos: </label>
	    	<input type="text" class="form-control" id="nombre" name="nombre">
	  	</div>
		<div class="form-group">
	    	<label for="email">Email: </label>
	    	<input type="email" class="form-control" id="email" name="email">
	  	</div>
	  	<div class="form-group">
	    	<label for="text">Escribe tu mensaje: </label>
	    	<textarea id="text" name="text" class="form-control" rows="3"></textarea>
	  	</div>
		<input type="button" class="btn btn-default" onclick="confirm('Su mensaje sera enviado, Muchas gracias')" value="Enviar" />
  	
	</form>
</div>
</div>
</div>

@endsection 