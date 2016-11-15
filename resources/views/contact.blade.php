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
      <div class="top-left links">
        <a href="{{ url('/') }}">Colegio Maranguita</a>
        <a href="{{ url('/nosotros') }}">Nosotros</a>
        <a href="{{ url('/ubicanos') }}">Ubicacion</a>
        <a href="{{ url('/contactenos') }}">Contactenos</a>
      </div>
      <div class="top-right links">
        <a href="{{ url('/login') }}">Entrar</a>
      </div>
      <div class="content" style="background-color: #222;opacity: .65;padding: 20px">
        <div class="title text-left" style="font-family:Montserrat-Regular;">Contactenos</div>
        <div class="links" style="font-family:Montserrat-Regular;color:#fff">
          <form method="POST">
            <input type="hidden" id="_token" name="_token" value="{{ csrf_token() }}">
            <div class="form-group">
              <label for="nombre">Nombres Completos: </label>
              <input type="text" class="form-control" id="nombre" name="nombre">
            </div>
            <div class="form-group">
              <label for="email">Email: </label>
              <input type="email" class="form-control" id="email" name="email">
            </div>
            <div class="form-group">
              <label for="text">Escribe tu mensaje: </label>
              <textarea id="text" name="text" class="form-control" rows="3"></textarea>
            </div>
            <input type="button" class="btn btn-default" onclick="confirm('Su mensaje sera enviado, Muchas gracias')" value="Enviar" />
          </form>
        </div>
      </div>
    </div>
  </body>
</html>
