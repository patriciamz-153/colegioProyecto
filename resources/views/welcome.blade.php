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
        <link href="{{asset('css/welcomeStyle.css')}}" rel="stylesheet" type="text/css">

    </head>
    <body>
        <div class="flex-center position-ref full-height" style="background-image: url({{asset('imagenes/background1.jpg')}}); background-repeat: no-repeat; background-size: cover;">
          <div class="top-left links">
            <a href="{{ url('/') }}">Colegio Maranguita</a>
            <a href="{{ url('/nosotros') }}">Nosotros</a>
            <a href="{{ url('/ubicanos') }}">Ubicacion</a>
            <a href="{{ url('/contactenos') }}">Contactenos</a>
          </div>
          <div class="top-right links">
            <a href="{{ url('/home') }}">
            @if(Auth::check())
              {{ Auth::user()->nombres }}
            @else
              Entrar
            @endif
            </a>
          </div>

            <div class="content">
                <div class="title text-left" style="font-family:Montserrat-Regular;">
                    Bienvenidos<br/>
                    Colegio Maranguita
                </div>

                <div class="links" style="font-family:Montserrat-Regular;color:#fff">
                    <h2>Sistema Virtual de Encuestas</h2>
                </div>
            </div>
        </div>
    </body>
</html>
