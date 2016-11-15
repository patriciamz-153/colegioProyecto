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
        <div class="flex-center position-ref full-height" style="background-image: url({{asset('imagenes/background1.jpg')}}); background-repeat: no-repeat; background-size: cover;">
          <div class="top-left links" style="margin-bottom: 20px;height: 60px;">
            <a href="{{ url('/') }}">Colegio Maranguita</a>
            <a href="{{ url('/nosotros') }}">Nosotros</a>
            <a href="{{ url('/ubicanos') }}">Ubicacion</a>
            <a href="{{ url('/contactenos') }}">Contactenos</a>
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

            <div class="content">
                <div class="title text-left" style="font-family:Montserrat-Regular;">
                    Bienvenidos<br/>
                    Colegio Maranguita
                </div>
                <div class="links" style="font-family:Montserrat-Regular;color:#fff">
                    <h2>Sistema Virtual de Encuestas</h2>
                </div>
                <br>
                <div class="row links" style="font-family:Montserrat-Regular;background-color: #222;opacity: .5;color:#fff">
                  <div class="col-md-4">
                    <h3>Qué es Maranguita</h3>
                    <p><span id="quees">Maranguita es un Movimiento de Educación Popular Integral y Promoción Social,  basado en los valores de justicia, libertad, participación y fraternidad, dirigida a la población empobrecida y excluida para contribuir a la transformación de las sociedades.</span></p>
                  </div>
                  <div class="col-md-4">
                    <h2>Misión</h2>
                    <p>Brindar una educación pública de calidad desde los valores evangélicos, con el propósito de contribuir a la formación de ciudadanos capaces de mejorar sus condiciones de vida y la transformación de las sociedades.</p>
                  </div>
                  <div class="col-md-4">
                    <h3>Visión</h3>
                    <p>Ser referente válido para la educación pública.</p>
                    <p>Implementar una propuesta educativa sistematizada que responda a las necesidades de los excluidos.</p>
                    <p>Formar ciudadanos éticos, democráticos y comprometidos con la transformación de la sociedad y el desarrollo sostenible.</p>
                  </div>
                </div>
            </div>
        </div>
    </body>
</html>
