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
                <h4 class="panel-title">EVALUACIÓN A LA INSTITUCIÓN</h4>
                </div>
                <div class="panel-body">
			  	<p>Lea con atención cada una de las preguntas, y escoja una sola opción. Algunas preguntas tendrán valores a escoger y serán del 1 al 5, siendo 5 la calificación más alta y 1 la más baja.</p>
			  	<div class="form-group">
			    	<label class="col-sm-4 control-label" for="nombre">¿Qué tan fácil es obtener los recursos que necesita para enseñar en esta escuela?</label>
			    	<div class="radio col-sm-8">
			    		<label class="col-sm-2" for="id0"><input type="radio" name="optionsRadios" id="id0" value="5" checked>5</label>
                      <label class="col-sm-2" for="id12"><input type="radio" name="optionsRadios" id="id12" value="4">4</label>
                      <label class="col-sm-2" for="id34"><input type="radio" name="optionsRadios" id="id34" value="3">3</label>
                      <label class="col-sm-2" for="id56"><input type="radio" name="optionsRadios" id="id56" value="2">2</label>
                      <label class="col-sm-2" for="idMas"><input type="radio" name="optionsRadios" id="idMas" value="1">1</label>
			    	</div>	
			  	</div>
			  	<div class="form-group">
			    	<label class="col-sm-4 control-label" for="nombre">¿Qué tan seguro se siente al enseñar en esta escuela?</label>
			    	<div class="radio col-sm-8">
			    		<label class="col-sm-2" for="id0"><input type="radio" name="optionsRadios1" id="id0" value="5" checked>5</label>
                      <label class="col-sm-2" for="id12"><input type="radio" name="optionsRadios1" id="id12" value="4">4</label>
                      <label class="col-sm-2" for="id34"><input type="radio" name="optionsRadios1" id="id34" value="3">3</label>
                      <label class="col-sm-2" for="id56"><input type="radio" name="optionsRadios1" id="id56" value="2">2</label>
                      <label class="col-sm-2" for="idMas"><input type="radio" name="optionsRadios1" id="idMas" value="1">1</label>
			    	</div>
			  	</div>
			  	<div class="form-group">
			    	<label  class="col-sm-4 control-label" for="nombre">¿Qué tan útil es la retroalimentación que le da el director de esta escuela?</label>
			    	<div class="radio col-sm-8">
			    		<label class="col-sm-2" for="id0"><input type="radio" name="optionsRadios2" id="id0" value="5" checked>5</label>
                      <label class="col-sm-2" for="id12"><input type="radio" name="optionsRadios2" id="id12" value="4">4</label>
                      <label class="col-sm-2" for="id34"><input type="radio" name="optionsRadios2" id="id34" value="3">3</label>
                      <label class="col-sm-2" for="id56"><input type="radio" name="optionsRadios2" id="id56" value="2">2</label>
                      <label class="col-sm-2" for="idMas"><input type="radio" name="optionsRadios2" id="idMas" value="1">1</label>
			    	</div>
			  	</div>
			  	<div class="form-group">
			    	<label  class="col-sm-4 control-label" for="nombre">¿Cuánto apoyo tiene la administración en esta escuela al personal docente?</label>
			    	<div class="radio col-sm-8">
			    		<label class="col-sm-2" for="id0"><input type="radio" name="optionsRadios3" id="id0" value="5" checked>5</label>
                      <label class="col-sm-2" for="id12"><input type="radio" name="optionsRadios3" id="id12" value="4">4</label>
                      <label class="col-sm-2" for="id34"><input type="radio" name="optionsRadios3" id="id34" value="3">3</label>
                      <label class="col-sm-2" for="id56"><input type="radio" name="optionsRadios3" id="id56" value="2">2</label>
                      <label class="col-sm-2" for="idMas"><input type="radio" name="optionsRadios3" id="idMas" value="1">1</label>
			    	</div>
			  	</div>
			  	<div class="form-group">
			    	<label  class="col-sm-4 control-label" for="nombre">¿Cuán razonables son las expectativas para el rendimiento estudiantil en esta escuela?</label>
			    	<div class="radio col-sm-8">
			    		<label class="col-sm-2" for="id0"><input type="radio" name="optionsRadios4" id="id0" value="5" checked>5</label>
                      <label class="col-sm-2" for="id12"><input type="radio" name="optionsRadios4" id="id12" value="4">4</label>
                      <label class="col-sm-2" for="id34"><input type="radio" name="optionsRadios4" id="id34" value="3">3</label>
                      <label class="col-sm-2" for="id56"><input type="radio" name="optionsRadios4" id="id56" value="2">2</label>
                      <label class="col-sm-2" for="idMas"><input type="radio" name="optionsRadios4" id="idMas" value="1">1</label>
			    	</div>
			  	</div>
			  	<div class="form-group">
			    	<label  class="col-sm-4 control-label" for="nombre">¿Esta institución presta demasiada atención a los exámenes estandarizados, poca atención a ellos o nada de atención a ellos?</label>
			    	<div class="radio col-sm-8">
			    		<label class="col-sm-2" for="id0"><input type="radio" name="optionsRadios5" id="id0" value="5" checked>5</label>
                      <label class="col-sm-2" for="id12"><input type="radio" name="optionsRadios5" id="id12" value="4">4</label>
                      <label class="col-sm-2" for="id34"><input type="radio" name="optionsRadios5" id="id34" value="3">3</label>
                      <label class="col-sm-2" for="id56"><input type="radio" name="optionsRadios5" id="id56" value="2">2</label>
                      <label class="col-sm-2" for="idMas"><input type="radio" name="optionsRadios5" id="idMas" value="1">1</label>
			    	</div>
			  	</div>
			  	<div class="form-group">
			    	<label  class="col-sm-4 control-label" for="nombre">¿Qué tan bien colaboran los maestros de esta escuela unos con otros?</label>
			    	<div class="radio col-sm-8">
			    		<label class="col-sm-2" for="id0"><input type="radio" name="optionsRadios6" id="id0" value="5" checked>5</label>
                      <label class="col-sm-2" for="id12"><input type="radio" name="optionsRadios6" id="id12" value="4">4</label>
                      <label class="col-sm-2" for="id34"><input type="radio" name="optionsRadios6" id="id34" value="3">3</label>
                      <label class="col-sm-2" for="id56"><input type="radio" name="optionsRadios6" id="id56" value="2">2</label>
                      <label class="col-sm-2" for="idMas"><input type="radio" name="optionsRadios6" id="idMas" value="1">1</label>
			    	</div>
			  	</div>
			  	<div class="form-group">
			    	<label  class="col-sm-4 control-label" for="nombre">¿Cuánta atención le da esta escuela a su crecimiento profesional?</label>
			    	<div class="radio col-sm-8">
			    		<label class="col-sm-2" for="id0"><input type="radio" name="optionsRadios7" id="id0" value="Demasiado" checked>Demasiado</label>
                      <label class="col-sm-2" for="id12"><input type="radio" name="optionsRadios7" id="id12" value="Mucho">Mucho</label>
                      <label class="col-sm-2" for="id34"><input type="radio" name="optionsRadios7" id="id34" value="Normal">Normal</label>
                      <label class="col-sm-2" for="id56"><input type="radio" name="optionsRadios7" id="id56" value="Poco">Poco</label>
                      <label class="col-sm-2" for="idMas"><input type="radio" name="optionsRadios7" id="idMas" value="MuyPoco">Muy poco</label>
			    	</div>
			  	</div>
			  	<div class="form-group">
			    	<label  class="col-sm-4 control-label" for="nombre">¿Cuánto apoyo financiero le da esta escuela para su crecimiento profesional?</label>
			    	<div class="radio col-sm-8">
			    		<label class="col-sm-2" for="id0"><input type="radio" name="optionsRadios8" id="id0" value="Demasiado" checked>Demasiado</label>
                      <label class="col-sm-2" for="id12"><input type="radio" name="optionsRadios8" id="id12" value="Mucho">Mucho</label>
                      <label class="col-sm-2" for="id34"><input type="radio" name="optionsRadios8" id="id34" value="Normal">Normal</label>
                      <label class="col-sm-2" for="id56"><input type="radio" name="optionsRadios8" id="id56" value="Poco">Poco</label>
                      <label class="col-sm-2" for="idMas"><input type="radio" name="optionsRadios8" id="idMas" value="MuyPoco">Muy poco</label>
			    	</div>
			  	</div>
			  	<div class="form-group">
			    	<label  class="col-sm-4 control-label" for="nombre">En general, ¿está usted satisfecho con la experiencia de la enseñanza en esta escuela, ni satisfecho ni insatisfecho con ella, o insatisfecho con ella?</label>
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