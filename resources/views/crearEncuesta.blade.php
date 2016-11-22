@extends('layout.template_admin')
@section('content')
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">

            <div class="page-title">
              <div class="title_left">
                <h3>Encuestas <small></small></h3>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Encuestas<small></small></h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <div class="row">

                      <div class="col-sm-3 mail_list_column">
                         <button id="compose" class="btn btn-sm btn-success btn-block" type="button">CREAR ENCUESTA</button>
                         <div class="row">

                          @foreach($encuestas as $encuesta)
                           <a ><span class="glyphicon glyphicon-triangle-right" aria-hidden="true"></span> {{$encuesta[1]}}</a><br>
                          @endforeach
                        </div>
                      </div>
                      <!-- /MAIL LIST -->

                      <!-- CONTENT MAIL -->
                      <div class="col-sm-9">

                        <div class="content" style="background-color: #222;opacity: .65;padding: 20px">
                        <div class="title text-left" style="font-family:Montserrat-Regular;">Crear Encuesta</div>
                        <div class="links" style="font-family:Montserrat-Regular;color:#fff">
                          <form method="POST">
                            <input type="hidden" id="_token" name="_token" value="{{ csrf_token() }}">
                            <div class="form-group">
                              <label for="value">Nombre: <span style="color:red;"><strong> *</strong></span>: </label>

                                    <input type="text" class="form-control" id="nombre" name="preguntas[]" patter="[A-Za-z-\s]+[a-z]" required>

                            </div>
                            <div class="form-group">
                              <label for="tipoUsuario">Tipo de Usuario <span style="color:red;"><strong> *</strong></span>: </label>
                              <select id="tipoUsuario" style="color: black;" name="tipoUsuario">
                                <option value="2" >Padre</option>
                                <option value="3">Profesor</option>

                              </select>

                            </div>
                            <div class="form-group">
                              <label for="text">Pregunta 1<span style="color:red;"><strong> *</strong></span>: </label>
                              <input type="text" class="form-control" id="pre1" name="preguntas[]" patter="[A-Za-z-\s]+[a-z]" required>
                            </div>
                            <div class="form-group">
                              <label for="text">Pregunta 2<span style="color:red;"><strong> *</strong></span>: </label>
                              <input type="text" class="form-control" id="pre2" name="preguntas[]" patter="[A-Za-z-\s]+[a-z]" required>
                            </div>
                            <div class="form-group">
                              <label for="text">Pregunta 3<span style="color:red;"><strong> *</strong></span>: </label>
                              <input type="text"  class="form-control" id="pre3" name="preguntas[]" patter="[A-Za-z-\s]+[a-z]" required>
                            </div>
                            <div class="form-group">
                              <label for="text">Pregunta 4<span style="color:red;"><strong> *</strong></span>: </label>
                              <input type="text"  class="form-control" id="pre4" name="preguntas[]" patter="[A-Za-z-\s]+[a-z]" required>
                            </div>
                            <div class="form-group">
                              <label for="text">Pregunta 5<span style="color:red;"><strong> *</strong></span>: </label>
                              <input type="text" class="form-control" id="pre5" name="preguntas[]" patter="[A-Za-z-\s]+[a-z]" required>
                            </div>
                            <div class="form-group">
                              <label for="text">Pregunta 6<span style="color:red;"><strong> *</strong></span>: </label>
                              <input type="text"  class="form-control" id="pre6" name="preguntas[]" patter="[A-Za-z-\s]+[a-z]" required>
                            </div>
                            <div class="form-group">
                              <label for="text">Pregunta 7<span style="color:red;"><strong> *</strong></span>: </label>
                              <input type="text" class="form-control" id="pre7" name="preguntas[]" patter="[A-Za-z-\s]+[a-z]" required>
                            </div>
                            <div class="form-group">
                              <label for="text">Pregunta 8<span style="color:red;"><strong> *</strong></span>: </label>
                              <input type="text" onchange="tomarPregunta()" class="form-control" id="pre8" name="preguntas[]" patter="[A-Za-z-\s]+[a-z]" required>
                            </div>


                            <input type="text" id="final" name="value" style="display: block;">

                           <input type="submit" class="btn btn-default" value="Enviar"  />
                          </form>
                        </div>
                      </div>

                      </div>
                      <!-- /CONTENT MAIL -->
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->
@endsection
@section('script')
    <script>
      var final="";

      function tomarPregunta(){

        final+= '{"Name":"'+document.getElementById("nombre").value + '","realizado":0,"Description":"Todos los campos son obligatorios.","Section":[{"Title":"'+document.getElementById("nombre").value + '","Description":"Lea con atención cada una de las preguntas, y escoja una sola opción. Los valores a escoger serán del 1 al 5, siendo 5 la calificación más alta y 1 la más baja.","Preguntas":[{"Enunciado":"';
        final+= document.getElementById("pre1").value+ '","Type":"Radio","Options":[{"5":0},{"4":0},{"3":0},{"2":0},{"1":0}]},{"Enunciado":"';
        final+= document.getElementById("pre2").value + '","Type":"Radio","Options":[{"5":0},{"4":0},{"3":0},{"2":0},{"1":0}]},{"Enunciado":"';
        final+= document.getElementById("pre3").value + '","Type":"Radio","Options":[{"5":0},{"4":0},{"3":0},{"2":0},{"1":0}]},{"Enunciado":"';
        final+= document.getElementById("pre4").value + '","Type":"Radio","Options":[{"5":0},{"4":0},{"3":0},{"2":0},{"1":0}]},{"Enunciado":"';
        final+= document.getElementById("pre5").value + '","Type":"Radio","Options":[{"5":0},{"4":0},{"3":0},{"2":0},{"1":0}]},{"Enunciado":"';
        final+= document.getElementById("pre6").value + '","Type":"Radio","Options":[{"5":0},{"4":0},{"3":0},{"2":0},{"1":0}]},{"Enunciado":"';
        final+= document.getElementById("pre7").value + '","Type":"Radio","Options":[{"5":0},{"4":0},{"3":0},{"2":0},{"1":0}]},{"Enunciado":"';
        final+= document.getElementById("pre8").value + '","Type":"Radio","Options":[{"5":0},{"4":0},{"3":0},{"2":0},{"1":0}]}]}]}';

        document.getElementById("final").value=final;
      }
    </script>
@endsection
