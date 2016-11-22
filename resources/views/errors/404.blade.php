<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Bienvenido | Colegio Maranguita</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link href="{{ url('css/app.css') }}" rel="stylesheet">
        <link href="{{asset('css/welcomeStyle.css')}}" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div class="flex-center position-ref full-height" style="background-image: url({{asset('imagenes/404.jpg')}}); background-repeat: no-repeat; background-size: cover;">
          <div class="top-left links" style="margin-bottom: 20px;height: 60px;">
            <a href="{{ url('/') }}">Colegio Maranguita</a>
            <a href="{{ url('/nosotros') }}">Nosotros</a>
            <a href="{{ url('/ubicanos') }}">Ubicacion</a>
            <a href="{{ url('/contactenos') }}">Contactenos</a>
          </div>
          <div class="top-right links">
            @if(Auth::check())
              <a href="{{ url('/home') }}">
                <span class="glyphicon glyphicon-user" aria-hidden="true"></span> {{ Auth::user()->nombres }}
              </a>
              <a href="{{ url('/logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                <span class="glyphicon glyphicon-log-out" aria-hidden="true"></span> Salir
              </a>
              <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
              </form>
            @else
              <a href="{{ url('/home') }}">Entrar</a>
            @endif
          </div>

          <div class="row" id="app">
            <div class="col-md-12" style="background-color: #222;opacity: .75;">
              <h1 style="color: #FEA700;">¿Creo que te has perdido?</h1>
              <div>
                <p class="lead" style="color: #fff;">
                  ¡¡Regresa!! No es por aquí.
                </p>
              </div>
            </div>
          </div>
        </div>
    </body>
</html>
