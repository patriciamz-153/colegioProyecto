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
    <div class="flex-center position-ref full-height" style="background-image: url({{asset('imagenes/contactenos.jpg')}}); background-repeat: no-repeat; background-size: cover;">
      <div class="top-left links" style="margin-bottom: 20px;height: 60px;">
        <a href="{{ url('/') }}">Colegio Maranguita</a>
        <a href="{{ url('/nosotros') }}">Nosotros</a>
        <a href="{{ url('/ubicanos') }}">Ubicación</a>
        <a href="{{ url('/contactenos') }}">Contáctenos</a>
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
      <div class="content" style="background-color: #222;opacity: .85;padding: 20px">
        <div class="title text-left" style="font-family:Montserrat-Regular;">Contáctenos</div>
        <div class="links" style="font-family:Montserrat-Regular;color:#fff">
          <form method="POST">
            <input type="hidden" id="_token" name="_token" value="{{ csrf_token() }}">
            <div class="form-group">
              <label for="nombre"><span style="color:red;"><strong> *</strong></span>Nombres: </label>
              <input type="text" class="form-control" id="nombre" name="nombre" pattern="[A-Za-z-\s]+[a-z]" required>
            </div>
            <div class="form-group">
              <label for="email"><span style="color:red;"><strong> *</strong></span>Email: </label>
              <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="form-group">
              <label for="text"><span style="color:red;"><strong> *</strong></span>Escribe tu mensaje: </label>
              <textarea id="text" name="text" class="form-control" rows="3" required=""></textarea>
            </div>
            <input type="submit" class="btn btn-primary" value="Enviar" />
          </form>
        </div>
      </div>
    </div>
  </body>
</html>
