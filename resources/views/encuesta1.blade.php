<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Sistema de Encuestas | Colegio Maranguita</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link href="{{ url('css/app.css') }}" rel="stylesheet">
        <link href="{{asset('css/welcomeStyle.css')}}" rel="stylesheet" type="text/css">

    </head>
    <body>
        <div class="position-ref full-height" style="background-image: url({{asset('imagenes/encuestas2.jpg')}}); background-repeat: no-repeat; background-size: cover;">
          <div class="top-left links" style="margin-bottom: 20px;height: 60px;">
            <a href="{{ url('/') }}">Colegio Maranguita</a>
          </div>
          <div class="top-right links">
            <a href="{{ url('/home') }}">
              <span class="glyphicon glyphicon-user" aria-hidden="true"></span> {{ Auth::user()->nombres }}
            </a>
            <a href="{{ url('/logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
              <span class="glyphicon glyphicon-log-out" aria-hidden="true"></span> Salir
            </a>
            <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>
          </div>

            <div class="content" style="padding-top:80px;padding-left:40px;padding-right;40px">
                <div class="title text-left" style="font-family:Montserrat-Regular;">
                    {{$data->Name}}
                </div>
                <div class="links" style="font-family:Montserrat-Regular;color:#fff">
                    @if(property_exists ($data,"Description"))<p style="color:red;">{{$data->Description}}</p>@endif
                </div>
                <br>
                <div class="row links col-md-10 col-md-offset-1" style="font-family:Montserrat-Regular;background-color: #222;opacity: .8;">
                  <form method="POST" class="form-horizontal" style="margin:15px;margin-top:25px">
                    {{ csrf_field() }}
                    <?php $i = 0;?>
                    @foreach($data->Section as $section)
                    <div class="panel panel-default">
                      <div class="panel-heading">
                      <h4 class="panel-title">{{$section->Title}}</h4>
                      </div>
                      <div class="panel-body" id="idAlert" style="display:none;">
                        <div class="alert alert-danger alert-dismissible" role="alert">
                            <strong>Imcompleto</strong>, faltan completar algunos datos.
                        </div>
                      </div>
                      <div class="panel-body">
                        @if(property_exists ($section,"Description"))<p>{{$section->Description}}</p>@endif
                        @foreach($section->Preguntas as $pregunta)
                        <div class="form-group">
                          <label class="col-sm-4 control-label">{{$pregunta->Enunciado}}<span style="color:red;"><strong> *</strong></span>:</label>
                          <div class="{{strtolower($pregunta->Type)}} col-sm-8">
                            @foreach($pregunta->Options as $option)
                              @foreach($option as $key => $value)
                                <label class="col-sm-2" for="id{{$key.$i}}"><input type="{{strtolower($pregunta->Type)}}" name="{{$pregunta->Enunciado}}@if($pregunta->Type=="Checkbox")[]@endif" id="id{{$key.$i++}}" value="{{$key}}">{{$key}}</label>
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
                        <input id="idEnviar" type="submit" class="btn btn-default" value="Enviar" />
                      </div>
                    </div>
                  </form>
                </div>
            </div>
        </div>
    </body>
</html>
