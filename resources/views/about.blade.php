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
        <div class="flex-center position-ref full-height" style="background-image: url({{asset('imagenes/nosotros.jpg')}}); background-repeat: no-repeat; background-size: cover;">
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
            <div class="col-md-6 col-md-offset-6" style="background-color: #222;opacity: .75;">
              <h1 style="color: #FEA700;">NOSOTROS</h1>
              <div>
                <h2 style="color: #FEA700;">¿Quiénes somos?</h2>
                <p class="lead" style="color: #fff;">
                  Maranguita es un colegio que trabaja con mucho labor y
                  una amplia experiencia en el ámbito de pedagogia. Somos una colegio que enseña valores.
                  <strong>Cumplir con las aprendizaje del alumno y este se sienta conforme con nuestra trabajo.</strong>
                </p>
                <p class="lead" style="color: #fff;">
                  Operamos conforme a las necesidades que el padre requiera de nuestro servicio, analisamos detalle a detalle
                  lo que el cliente pide.
                </p>
                <div class="space"></div>
              </div>
              <h2 style="color: #FEA700;">¿Qué servicios brindamos?</h2>
              <ul class="list-icons lead"  style="color: #fff;">
                <li><i class="icon-check"></i>Brindamos el servicio de escuela de Padres.</li>
                <li><i class="icon-check"></i>Brindamos servicio de talleres pedagogicos.</li>
                <li><i class="icon-check"></i>Contamos con el servicio de tutoria.</li>
                <li><i class="icon-check"></i>También contamos con el servicio psicologia educativa.</li>
                <li><i class="icon-check"></i>Disponemos del servicio de formacion vocacional.</li>
              </ul>
            </div>
          </div>
        </div>
    </body>
</html>
