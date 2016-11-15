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
        <a href="{{ url('/home') }}">
        @if(Auth::check())
          <span class="glyphicon glyphicon-user" aria-hidden="true"></span> {{ Auth::user()->nombres }}
        @else
          Entrar
        @endif
        </a>
      </div>
      <div class="content" style="background-color: #222;opacity: .65;padding: 20px">
        <div class="title text-left" style="font-family:Montserrat-Regular;">Contáctenos</div>
        <div class="links" style="font-family:Montserrat-Regular;color:#fff">
          <div class="alert alert-success" role="alert">Su mensaje se envió correctamente.</div>
          <form method="POST">
            <input type="hidden" id="_token" name="_token" value="{{ csrf_token() }}">
            <div class="form-group">
              <label for="nombre">Nombres Completos <span style="color:red;"><strong> *</strong></span>: </label>
              <input type="text" class="form-control" id="nombre" name="nombre">
            </div>
            <div class="form-group">
              <label for="email">Email <span style="color:red;"><strong> *</strong></span>: </label>
              <input type="email" class="form-control" id="email" name="email">
            </div>
            <div class="form-group">
              <label for="text">Escribe tu mensaje <span style="color:red;"><strong> *</strong></span>: </label>
              <textarea id="text" name="text" class="form-control" rows="3"></textarea>
            </div>
            <input type="submit" class="btn btn-default" value="Enviar" />
          </form>
        </div>
      </div>
    </div>
  </body>
</html>
