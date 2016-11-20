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

            <div class="content" style="font-family:Montserrat-Regular;background-color: #222;opacity: .7;color:#fff;padding-top:10px;padding-left:10px;padding-right:10px;padding-bottom: 50px;">
                <div class="title text-left" style="font-family:Montserrat-Regular;">
                  ¡Gracias!
                </div>
                <div class="links" style="font-family:Montserrat-Regular;color:#fff">
                    <p>Gracias por completar la encuesta, sus respuestas han sido enviadas.</p>
                </div>
                <div class="form-group">
                  <div class="col-sm-10 col-sm-offset-6">
                    <input id="idRegresar" type="submit" class="btn btn-primary" value="Regresar" />
                  </div>
                </div>
            </div>
        </div>
    </body>
</html>
