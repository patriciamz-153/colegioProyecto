@extends('layouts.admin')

@section('content')



    <div class = 'container'>
      <div class= "arrow">
        <h1>Encuestas</h1>

        <div class="row">
          <div class="col-xs-12 col-sm-12">
            <form method="POST" class="form-horizontal">
              <?php $i = 0;?>
              @foreach($data->Section as $section)
              <div class="panel panel-default">
                <div class="panel-heading">
                <h4 class="panel-title">{{$section->Title}}</h4>
                </div>
                <div class="panel-body">
                  @foreach($section->Preguntas as $pregunta)
                  <div class="form-group">
                    <label class="col-sm-4 control-label">{{$pregunta->Enunciado}}:</label>
                    <div class="{{strtolower($pregunta->Type)}} col-sm-8">
                      @foreach($pregunta->Options as $option)
                        @foreach($option as $key => $value)
                          <label class="col-sm-2" for="id{{$key.$i}}"><input type="{{strtolower($pregunta->Type)}}" name="{{$pregunta->Enunciado}}" id="id{{$key.$i++}}" value="{{$key}}">{{$key}}</label>
                        @endforeach
                      @endforeach
                    </div>
                  </div>
                  @endforeach
                </div>
              </div>
              @endforeach
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
