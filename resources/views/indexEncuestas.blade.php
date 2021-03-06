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
        <div class="flex-center position-ref full-height" style="background-image: url({{asset('imagenes/encuestas.jpg')}}); background-repeat: no-repeat; background-size: cover;">
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

            <div class="content" style="font-family:Montserrat-Regular;background-color: #222;opacity: .8;color:#fff;padding-top:10px;padding-left:10px;padding-right:10px;padding-bottom: 50px;">
                <div class="title text-left" style="font-family:Montserrat-Regular;">
                  Bienvenido al sistema de encuestas.
                </div>
                <div class="links" style="font-family:Montserrat-Regular;color:#fff">
                    <p>Sistema Virtual de Encuestas</p>
                </div>
                <br>
                <div class="links" style="font-family:Montserrat-Regular;color:#fff">
                    @foreach($encuestas as $encuesta)
                    <a href="{{ url('/encuesta',[$encuesta[0]])}}"><span class="glyphicon glyphicon-triangle-right" aria-hidden="true"></span> {{$encuesta[1]}}</a><br>
                    @endforeach
                </div>
            </div>
        </div>
    </body>
</html>
