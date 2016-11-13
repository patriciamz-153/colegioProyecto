@extends('layouts.admin')

@section('content')

    

    <div class = 'container'>
      <div class= "arrow">
        <h1>Encuestas</h1>

        <div class="row">
          <div class="col-xs-12 col-sm-12">

        	<form method="POST" class="form-horizontal">
				

				<input type="hidden" id="_token" name="_token" value="{{ csrf_token() }}">

				<div class="panel panel-default">
                <div class="panel-heading">
                <h4 class="panel-title">EVALUACIÓN INSTITUCIONAL</h4>
                </div>
                <div class="panel-body">
			  	<p>Lea con atención cada una de las preguntas, y escoja una sola opción. Los valores a escoger serán del 1 al 5, siendo 5 la calificación más alta y 1 la más baja.</p>
			  	<div class="form-group">
			    	<label class="col-sm-4 control-label" for="nombre">¿Cómo califica el trabajo de los directivos de la institución? </label>
			    	<div class="radio col-sm-8">
			    		<label class="col-sm-2" for="id0"><input type="radio" name="optionsRadios" id="id0" value="5" checked>5</label>
                      <label class="col-sm-2" for="id12"><input type="radio" name="optionsRadios" id="id12" value="4">4</label>
                      <label class="col-sm-2" for="id34"><input type="radio" name="optionsRadios" id="id34" value="3">3</label>
                      <label class="col-sm-2" for="id56"><input type="radio" name="optionsRadios" id="id56" value="2">2</label>
                      <label class="col-sm-2" for="idMas"><input type="radio" name="optionsRadios" id="idMas" value="1">1</label>
			    	</div>
			    	
			  	</div>
			  	<div class="form-group">
			    	<label class="col-sm-4 control-label" for="nombre">¿Cómo califica la actitud que tienen los directivos de la institución con los familiares de los y las estudiantes?</label>
			    	<div class="radio col-sm-8">
			    		<label class="col-sm-2" for="id0"><input type="radio" name="optionsRadios1" id="id0" value="5" checked>5</label>
                      <label class="col-sm-2" for="id12"><input type="radio" name="optionsRadios1" id="id12" value="4">4</label>
                      <label class="col-sm-2" for="id34"><input type="radio" name="optionsRadios1" id="id34" value="3">3</label>
                      <label class="col-sm-2" for="id56"><input type="radio" name="optionsRadios1" id="id56" value="2">2</label>
                      <label class="col-sm-2" for="idMas"><input type="radio" name="optionsRadios1" id="idMas" value="1">1</label>
			    	</div>
			  	</div>
			  	<div class="form-group">
			    	<label  class="col-sm-4 control-label" for="nombre">¿Cómo califica la capacidad que tiene el profesor o la profesora del año en que se encuentra su representado, para enseñar lo necesario a los estudiantes? </label>
			    	<div class="radio col-sm-8">
			    		<label class="col-sm-2" for="id0"><input type="radio" name="optionsRadios2" id="id0" value="5" checked>5</label>
                      <label class="col-sm-2" for="id12"><input type="radio" name="optionsRadios2" id="id12" value="4">4</label>
                      <label class="col-sm-2" for="id34"><input type="radio" name="optionsRadios2" id="id34" value="3">3</label>
                      <label class="col-sm-2" for="id56"><input type="radio" name="optionsRadios2" id="id56" value="2">2</label>
                      <label class="col-sm-2" for="idMas"><input type="radio" name="optionsRadios2" id="idMas" value="1">1</label>
			    	</div>
			  	</div>
			  	<div class="form-group">
			    	<label  class="col-sm-4 control-label" for="nombre">¿Cómo califica la relación que tiene el profesor o la profesora, con el estudiante del año en que se encuentra su representado?</label>
			    	<div class="radio col-sm-8">
			    		<label class="col-sm-2" for="id0"><input type="radio" name="optionsRadios3" id="id0" value="5" checked>5</label>
                      <label class="col-sm-2" for="id12"><input type="radio" name="optionsRadios3" id="id12" value="4">4</label>
                      <label class="col-sm-2" for="id34"><input type="radio" name="optionsRadios3" id="id34" value="3">3</label>
                      <label class="col-sm-2" for="id56"><input type="radio" name="optionsRadios3" id="id56" value="2">2</label>
                      <label class="col-sm-2" for="idMas"><input type="radio" name="optionsRadios3" id="idMas" value="1">1</label>
			    	</div>
			  	</div>
			  	<div class="form-group">
			    	<label  class="col-sm-4 control-label" for="nombre">¿A su representado le gusta permanecer en la institución educativa?</label>
			    	<div class="radio col-sm-8">
			    		<label class="col-sm-2" for="id0"><input type="radio" name="optionsRadios4" id="id0" value="5" checked>5</label>
                      <label class="col-sm-2" for="id12"><input type="radio" name="optionsRadios4" id="id12" value="4">4</label>
                      <label class="col-sm-2" for="id34"><input type="radio" name="optionsRadios4" id="id34" value="3">3</label>
                      <label class="col-sm-2" for="id56"><input type="radio" name="optionsRadios4" id="id56" value="2">2</label>
                      <label class="col-sm-2" for="idMas"><input type="radio" name="optionsRadios4" id="idMas" value="1">1</label>
			    	</div>
			  	</div>
			  	<div class="form-group">
			    	<label  class="col-sm-4 control-label" for="nombre">¿La institución brinda apoyo especial a los estudiantes, para que puedan cumplir satisfactoriamente con sus obligaciones escolares?</label>
			    	<div class="radio col-sm-8">
			    		<label class="col-sm-2" for="id0"><input type="radio" name="optionsRadios5" id="id0" value="5" checked>5</label>
                      <label class="col-sm-2" for="id12"><input type="radio" name="optionsRadios5" id="id12" value="4">4</label>
                      <label class="col-sm-2" for="id34"><input type="radio" name="optionsRadios5" id="id34" value="3">3</label>
                      <label class="col-sm-2" for="id56"><input type="radio" name="optionsRadios5" id="id56" value="2">2</label>
                      <label class="col-sm-2" for="idMas"><input type="radio" name="optionsRadios5" id="idMas" value="1">1</label>
			    	</div>
			  	</div>
			  	<div class="form-group">
			    	<label  class="col-sm-4 control-label" for="nombre">¿Usted u otro miembro del grupo familiar suelen brindar ayuda en las tareas de los estudiantes a su cargo?</label>
			    	<div class="radio col-sm-8">
			    		<label class="col-sm-2" for="id0"><input type="radio" name="optionsRadios6" id="id0" value="5" checked>5</label>
                      <label class="col-sm-2" for="id12"><input type="radio" name="optionsRadios6" id="id12" value="4">4</label>
                      <label class="col-sm-2" for="id34"><input type="radio" name="optionsRadios6" id="id34" value="3">3</label>
                      <label class="col-sm-2" for="id56"><input type="radio" name="optionsRadios6" id="id56" value="2">2</label>
                      <label class="col-sm-2" for="idMas"><input type="radio" name="optionsRadios6" id="idMas" value="1">1</label>
			    	</div>
			  	</div>
			  	<div class="form-group">
			    	<label  class="col-sm-4 control-label" for="nombre">¿Las instalaciones de la institución son seguras, cuenta con: cerramiento, extintores de incendio, salidas suficientes, buenas instalaciones eléctricas, para evitar accidentes?</label>
			    	<div class="radio col-sm-8">
			    		<label class="col-sm-2" for="id0"><input type="radio" name="optionsRadios7" id="id0" value="5" checked>5</label>
                      <label class="col-sm-2" for="id12"><input type="radio" name="optionsRadios7" id="id12" value="4">4</label>
                      <label class="col-sm-2" for="id34"><input type="radio" name="optionsRadios7" id="id34" value="3">3</label>
                      <label class="col-sm-2" for="id56"><input type="radio" name="optionsRadios7" id="id56" value="2">2</label>
                      <label class="col-sm-2" for="idMas"><input type="radio" name="optionsRadios7" id="idMas" value="1">1</label>
			    	</div>
			  	</div>
			  	<div class="form-group">
			    	<label  class="col-sm-4 control-label" for="nombre">¿Cómo califica, en general, la calidad educativa de la institución?</label>
			    	<div class="radio col-sm-8">
			    		<label class="col-sm-2" for="id0"><input type="radio" name="optionsRadios8" id="id0" value="5" checked>5</label>
                      <label class="col-sm-2" for="id12"><input type="radio" name="optionsRadios8" id="id12" value="4">4</label>
                      <label class="col-sm-2" for="id34"><input type="radio" name="optionsRadios8" id="id34" value="3">3</label>
                      <label class="col-sm-2" for="id56"><input type="radio" name="optionsRadios8" id="id56" value="2">2</label>
                      <label class="col-sm-2" for="idMas"><input type="radio" name="optionsRadios8" id="idMas" value="1">1</label>
			    	</div>
			  	</div>

			  	<div class="form-group">
                    <div class="col-sm-10 col-sm-offset-6">
                      <input type="button" class="btn btn-default" onclick="confirm('Su encuesta sera enviada, Muchas gracias')" value="Enviar" />
                    </div>
                  </div>

			  	</div>
			  </div>
			</form>


		  </div>
        </div> 


      </div>
      <div class="space"></div>
    <div class="col-lg-7 col-sm-7">
        
    </div>
    
  </div>
@endsection
