<!DOCTYPE html>
<html lang="es">
  <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- CSRF Token -->
      <meta name="csrf-token" content="{{ csrf_token() }}">
      <link rel="shortcut icon" href="{{ url('favicon.ico') }}" />
      <title>{{ config('app.name', 'Laravel') }}</title>
      <!-- Styles -->
      <link href="{{ url('css/app.css') }}" rel="stylesheet">
      <link href="{{asset('css/welcomeStyle.css')}}" rel="stylesheet" type="text/css">
      <!-- Scripts -->
      <script>
          window.Laravel = <?php echo json_encode([
              'csrfToken' => csrf_token(),
          ]); ?>
      </script>
  </head>
  <body>
    <div class="flex-center position-ref full-height" style="background-image: url({{asset('imagenes/login.jpg')}}); background-repeat: no-repeat; background-size: cover;">
      <div class="top-left links">
        <a href="{{ url('/') }}">Colegio Maranguita</a>
        <a href="{{ url('/nosotros') }}">Nosotros</a>
        <a href="{{ url('/ubicanos') }}">Ubicación</a>
        <a href="{{ url('/contactenos') }}">Contáctenos</a>
      </div>
      <div class="top-right links">
        <a href="{{ url('/login') }}">Entrar</a>
      </div>
      <div class="content col-md-6 col-md-offset-3" style="background-color: #333;opacity: .90;padding: 20px;">
        <div class="title text-left" style="font-family:Montserrat-Regular; text-align: center;">Entrar</div>
        <div class="links" style="font-family:Montserrat-Regular;color:#fff">
          <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
            {{ csrf_field() }}
            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
              <label for="email" class="col-md-4 control-label">Usuario</label>
                <div class="col-md-6">
                  <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
                  @if ($errors->has('email'))
                    <span class="help-block">
                      <strong>{{ $errors->first('email') }}</strong>
                    </span>
                  @endif
                </div>
              </div>
              <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                <label for="password" class="col-md-4 control-label">Contraseña</label>
                <div class="col-md-6">
                  <input id="password" type="password" class="form-control" name="password" required>
                  @if ($errors->has('password'))
                    <span class="help-block">
                      <strong>{{ $errors->first('password') }}</strong>
                    </span>
                  @endif
                </div>
              </div>
              <div class="form-group">
                <div class="col-md-6 col-md-offset-4">
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="remember"> Recuérdame
                    </label>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="g-recaptcha" data-sitekey="6Lc6mgwUAAAAAJVSxZ8fMTsM41uSOmsMsu6l0VU2"></div>
                <span class="help-block" style="display: none;">Please check that you are not a robot.</span>
              </div>
              <div class="form-group">
                <div class="col-md-8 col-md-offset-4">
                  <button type="submit" class="btn btn-primary">Entrar</button>
                  <a class="btn btn-link" href="{{ url('/password/reset') }}">¿Olvidaste tu contraseña?</a>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
      <!-- Scripts -->
      <script src="{{ url('js/app.js') }}"></script>
      <script src="https://www.google.com/recaptcha/api.js"></script>
  </body>
</html>
