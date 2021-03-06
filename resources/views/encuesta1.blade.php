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
    <link href="{{ url('css/prettify.min.css') }}" rel="stylesheet">
    <link href="{{asset('css/welcomeStyle.css')}}" rel="stylesheet" type="text/css">
  </head>
  <body style="overflow-x: hidden;">
    <div class="position-ref full-height" style="background-image: url({{asset('imagenes/encuestas2.jpg')}}); background-size: cover;background-repeat: no-repeat; background-attachment: fixed; ">
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
      <div class="content" style="padding-top:80px;padding-left:40px;padding-right:40px;">
        <div class="title text-left" style="font-family:Montserrat-Regular;">
          {{$data->Name}}
        </div>
        <div class="links" style="font-family:Montserrat-Regular;color:#fff">
          @if(property_exists ($data,"Description"))<p style="color:red;">{{$data->Description}}</p>@endif
        </div>
        <br>
        <div class="row links col-md-10 col-md-offset-1" style="font-family:Montserrat-Regular;background-color: #222;opacity: .97;">
          <form method="POST" class="form-horizontal" style="margin:15px;margin-top:25px">
            {{ csrf_field() }}
            <?php $i = 0;?>
            <div id="rootwizard">
              <div class="navbar">
                <div class="navbar-inner">
                  <div class="container">
                    <ul>
                      <?php $tab=1; ?>
                      @foreach($data->Section as $section)
                      <li><a href="#tab{{$tab++}}" data-toggle="tab">{{$section->Title}}</a></li>
                      @endforeach
	                  </ul>
	                </div>
                </div>
	            </div>
              <div class="tab-content">
                <?php $tab=1; ?>
                @foreach($data->Section as $section)
                <div class="tab-pane" id="tab{{$tab++}}">
                  <div class="panel panel-default">
                    <div class="panel-body">
                      @if(property_exists ($section,"Description"))<p>{{$section->Description}}</p>@endif
                      @foreach($section->Preguntas as $pregunta)
                      <div class="form-group">
                        <label class="col-sm-4 control-label">@if($pregunta->Type!="Checkbox")<span style="color:red;"><strong> *</strong></span>@endif {{$pregunta->Enunciado}}:</label>
                        <div class="{{strtolower($pregunta->Type)}} col-sm-8 ">
                          @foreach($pregunta->Options as $option)
                          @foreach($option as $key => $value)
                          <label class="col-sm-2" for="id{{$key.$i}}"><input type="{{strtolower($pregunta->Type)}}" name="{{$pregunta->Enunciado}}@if($pregunta->Type=="Checkbox")[]@endif" @if($pregunta->Type=="Radio") required="required" @endif id="id{{$key.$i++}}" value="{{$key}}">{{$key}}</label>
                          @endforeach
                          @endforeach
                        </div>
                      </div>
                      @endforeach
                    </div>
                  </div>
                </div>
                @endforeach
                <ul class="pager wizard">
                  <li class="previous"><a href="#">Anterior</a></li>
                  <li class="next"><a href="#">Siguiente</a></li>
                </ul>
              </div>
            </div>
            <div class="form-group">
              <div class="col-sm-10 col-sm-offset-6">
                <input id="idEnviar" type="submit" class="btn btn-primary" value="Enviar" />
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
    <script type="text/javascript" src="{{url('js/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{url('js/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{url('js/prettify.js')}}"></script>
    <script type="text/javascript" src="{{url('js/jquery.bootstrap.wizard.min.js')}}"></script>
    <script type="text/javascript">
      $(document).ready(function() {
        $('#rootwizard').bootstrapWizard({onTabClick: function(tab, navigation, index) {
          alert('on tab click disabled');
          return false;
        }});
      });
    </script>
  </body>
</html>
