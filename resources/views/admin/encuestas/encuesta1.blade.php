@extends('layouts.admin')

@section('content')

    

    <div class = 'container'>
      <div class= "arrow">
        <h1>Encuestas</h1>
        
        <div class="row">
          <div class="col-xs-12 col-sm-12">
            <form method="POST" class="form-horizontal">
              <div class="panel panel-default">
                <div class="panel-heading">
                <h4 class="panel-title">COMPOSICIÓN FAMILIAR</h4>
                </div>
                <div class="panel-body">
                  <div class="form-group">
                    <label class="col-sm-4 control-label">Los padres se encuentran:</label>
                    <div class="radio col-sm-8">
                      <label class="col-sm-2" for="idCasados"><input type="radio" name="optionsRadios" id="idCasados" value="Casado" checked>Casados</label>
                      <label class="col-sm-2" for="idDivorciado"><input type="radio" name="optionsRadios" id="idDivorciado" value="Divorciado">Divorciado</label>
                      <label class="col-sm-2" for="idViudo"><input type="radio" name="optionsRadios" id="idViudo" value="Viudo">Viudo</label>
                      <label class="col-sm-2" for="idSeparados"><input type="radio" name="optionsRadios" id="idSeparados" value="Separados">Separados</label>
                      <label class="col-sm-2" for="idMuertos"><input type="radio" name="optionsRadios" id="idMuertos" value="muertos">Muertos</label>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-4 control-label">Los padres se encuentran vivos:</label>
                    <div class="radio col-sm-8">
                      <label class="col-sm-2" for="idPadre"><input type="radio" name="optionsRadios1" id="idPadre" value="Padre" checked>Padre</label>
                      <label class="col-sm-2" for="idMadre"><input type="radio" name="optionsRadios1" id="idMadre" value="Madre">Madre</label>
                      <label class="col-sm-2" for="idAmbos"><input type="radio" name="optionsRadios1" id="idAmbos" value="Ambos">Ambos</label>
                      <label class="col-sm-2" for="idNinguno"><input type="radio" name="optionsRadios1" id="idNinguno" value="Ninguno">Ninguno</label>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-4 control-label">Con quien reside el alumno:</label>
                    <div class="radio col-sm-8">
                      <label class="col-sm-2" for="idPadres"><input type="radio" name="optionsRadios2" id="idPadres" value="Padres" checked>Padres</label>
                      <label class="col-sm-2" for="idTutores"><input type="radio" name="optionsRadios2" id="idTutores" value="Tutores">Tutores</label>
                      <label class="col-sm-2" for="idAmbuelos"><input type="radio" name="optionsRadios2" id="idAbuelos" value="Abuelos">Abuelos</label>
                      <label class="col-sm-2" for="idSolo"><input type="radio" name="optionsRadios2" id="idSolo" value="Solo">Solo</label>
                      <label class="col-sm-2" for="idOtros"><input type="radio" name="optionsRadios2" id="idOtros" value="Otros">Otros</label>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-4 control-label">El número de hermanos es:</label>
                    <div class="radio col-sm-8">
                      <label class="col-sm-2" for="id0"><input type="radio" name="optionsRadios3" id="id0" value="0" checked>0</label>
                      <label class="col-sm-2" for="id12"><input type="radio" name="optionsRadios3" id="id12" value="1-2">1-2</label>
                      <label class="col-sm-2" for="id34"><input type="radio" name="optionsRadios3" id="id34" value="3-4">3-4</label>
                      <label class="col-sm-2" for="id56"><input type="radio" name="optionsRadios3" id="id56" value="5-6">5-6</label>
                      <label class="col-sm-2" for="idMas"><input type="radio" name="optionsRadios3" id="idMas" value="Mas">Más de 6</label>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-4 control-label">¿Cuáles son las variables que determinan la relación tutor(o padres)-hijo?</label>
                    <div class="radio col-sm-8">
                      <label class="col-sm-2" for="idAfectivo"><input type="radio" name="optionsRadios4" id="idAfectivo" value="Afectivo" checked>Afectivo</label>
                      <label class="col-sm-2" for="idHostil"><input type="radio" name="optionsRadios4" id="idHostil" value="Hostil">Hostil</label>
                      <label class="col-sm-2" for="idControlador"><input type="radio" name="optionsRadios4" id="idControlador" value="Controlador">Controlador</label>
                      <label class="col-sm-2" for="idPermisivo"><input type="radio" name="optionsRadios4" id="idPermisivo" value="Permisivo">Permisivo</label>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-4 control-label">La relación con sus hermanos es:</label>
                    <div class="radio col-sm-8">
                      <label class="col-sm-2" for="idEquilibrada"><input type="radio" name="optionsRadios5" id="idEquilibrada" value="Equilibrada" checked>Equilibrada</label>
                      <label class="col-sm-2" for="idAmorosa"><input type="radio" name="optionsRadios5" id="idAmorosa" value="Amorosa">Amorosa</label>
                      <label class="col-sm-2" for="idTensa"><input type="radio" name="optionsRadios5" id="idTensa" value="Tensa">Tensa</label>
                      <label class="col-sm-2" for="idDistante"><input type="radio" name="optionsRadios5" id="idDistante" value="Distante">Distante</label>
                      <label class="col-sm-2" for="idNoHermano"><input type="radio" name="optionsRadios5" id="idNoHermano" value="No tengo">No tengo</label>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-4 control-label">La relación con otros familiares es:</label>
                    <div class="radio col-sm-8">
                      <label class="col-sm-2" for="idEquilibrada2"><input type="radio" name="optionsRadios6" id="idEquilibrada2" value="Equilibrada" checked>Equilibrada</label>
                      <label class="col-sm-2" for="idAmorosa2"><input type="radio" name="optionsRadios6" id="idAmorosa2" value="Amorosa">Amorosa</label>
                      <label class="col-sm-2" for="idTensa2"><input type="radio" name="optionsRadios6" id="idTensa2" value="Tensa">Tensa</label>
                      <label class="col-sm-2" for="idDistante2"><input type="radio" name="optionsRadios6" id="idDistante2" value="Distante">Distante</label>
                    </div>
                  </div>
                </div>
              </div>

              <div class="panel panel-default">
                <div class="panel-heading">
                <h4 class="panel-title">SITUACIÓN ECONÓMICA</h4>
                </div>
                <div class="panel-body">

                  <div class="form-group">
                    <label class="col-sm-4 control-label">Tipo de trabajo del padre, madre o tutor:</label>
                    <div class="radio col-sm-8">
                      <label class="col-sm-2" for="idPermanente"><input type="radio" name="optionsRadios7" id="idPermanente" value="Permanente" checked>Permanente</label>
                      <label class="col-sm-2" for="idTemporal"><input type="radio" name="optionsRadios7" id="idTemporal" value="Temporal">Temporal</label>
                      <label class="col-sm-2" for="idOcasional"><input type="radio" name="optionsRadios7" id="idOcasional" value="Ocasional">Ocasional</label>
                      <label class="col-sm-2" for="idPensionado"><input type="radio" name="optionsRadios7" id="idPensionado" value="Pensionado">Pensionado</label>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-4 control-label">Los ingresos economicos en el hogar son:</label>
                    <div class="radio col-sm-8">
                      <label class="col-sm-2" for="id0850"><input type="radio" name="optionsRadios8" id="id0850" value="MenorBasico" checked>0-850</label>
                      <label class="col-sm-2" for="idBasico"><input type="radio" name="optionsRadios8" id="idBasico" value="Basico">850</label>
                      <label class="col-sm-2" for="idNormal"><input type="radio" name="optionsRadios8" id="idNormal" value="Normal">850-1500</label>
                      <label class="col-sm-2" for="idMedia"><input type="radio" name="optionsRadios8" id="idMedia" value="Media">1500-3000</label>
                      <label class="col-sm-2" for="idAlta"><input type="radio" name="optionsRadios8" id="idAlta" value="Alta">3000 a más</label>
                    </div>
                  </div>
                </div>
              </div>

              <div class="panel panel-default">
                <div class="panel-heading">
                <h4 class="panel-title">VIVIENDA</h4>
                </div>
                <div class="panel-body">

                  <div class="form-group">
                    <label class="col-sm-4 control-label">Actualmente vive en:</label>
                    <div class="radio col-sm-8">
                      <label class="col-sm-2" for="idCasa"><input type="radio" name="optionsRadios9" id="idCasa" value="Casa" checked>Casa</label>
                      <label class="col-sm-2" for="idDepartamento"><input type="radio" name="optionsRadios9" id="idDepartamento" value="Departamento">Departamento</label>
                      <label class="col-sm-2" for="idOtro"><input type="radio" name="optionsRadios9" id="idOtro" value="Otro">Otro</label>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-4 control-label">La vivienda es:</label>
                    <div class="radio col-sm-8">
                      <label class="col-sm-2" for="idPropia"><input type="radio" name="optionsRadios10" id="idPropia" value="Propia" checked>Propia</label>
                      <label class="col-sm-2" for="idAlquilada"><input type="radio" name="optionsRadios10" id="idAlquilada" value="Alquilada">Alquilada</label>
                      <label class="col-sm-2" for="idPrestada"><input type="radio" name="optionsRadios10" id="idPrestada" value="Prestada">Prestada</label>
                      <label class="col-sm-2" for="idInvacion"><input type="radio" name="optionsRadios10" id="idInvacion" value="Invacion">Invación</label>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-4 control-label">¿Realizan cambios frecuentes de residencia?</label>
                    <div class="radio col-sm-8">
                      <label class="col-sm-2" for="idSi"><input type="radio" name="optionsRadios11" id="idSi" value="Si" checked>Sí</label>
                      <label class="col-sm-2" for="idNo"><input type="radio" name="optionsRadios11" id="idNo" value="No">No</label>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-4 control-label">Posee los servicios de: </label>
                    <div class="checkbox  col-sm-8">
                      <label class="col-sm-2" for="idAgua"><input type="checkbox"  id="idAgua" value="Agua">Agua</label>
                      <label class="col-sm-2" for="idLuz"><input type="checkbox"  id="idLuz" value="Luz">Luz</label>
                      <label class="col-sm-2" for="idDesague"><input type="checkbox"  id="idDesague" value="Desague">Desagüe</label>
                      <label class="col-sm-2" for="idCable"><input type="checkbox"  id="idCable" value="Cable">Cable</label>
                      <label class="col-sm-2" for="idInternet"><input type="checkbox"  id="idInternet" value="Internet">Internet</label>
                    </div>
                  </div>
                </div>
              </div>

              <div class="panel panel-default">
                <div class="panel-heading">
                <h4 class="panel-title">RECREACIÓN Y USO DEL TIEMPO FAMILIAR</h4>
                </div>
                <div class="panel-body">

                  <div class="form-group">
                    <label class="col-sm-4 control-label">Actividades familiares que se realizan al aire libre:</label>
                    <div class="checkbox col-sm-8">
                      <label class="col-sm-2" for="idDeportes"><input type="checkbox" id="idDeportes" value="Deportes" checked>Deportes</label>
                      <label class="col-sm-2" for="idTelevision"><input type="checkbox" id="idTelevision" value="Television">Televisión</label>
                      <label class="col-sm-2" for="idSalir"><input type="checkbox" id="idSalir" value="Salir">Salir</label>
                      <label class="col-sm-2" for="idHome"><input type="checkbox" id="idHome" value="Home">En Casa</label>
                      <label class="col-sm-2" for="idOtro"><input type="checkbox" id="idOtro" value="Otro">Otros</label>
                    </div>
                  </div>
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
