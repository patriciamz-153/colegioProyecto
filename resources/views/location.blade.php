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
        <div class="flex-center position-ref full-height" style="background-image: url({{asset('imagenes/ubicanos.jpg')}}); background-repeat: no-repeat; background-size: cover;">
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

          <div class="row" id="app" style="color: #fff;">
            <h1 style="color: #FEA700;">Ubicacion</h1>
        		<div class="col-lg-7 col-sm-7">
        		    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d931.0367572077748!2d-76.95578412890097!3d-12.16151498576458!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMTLCsDA5JzQwLjciUyA3NsKwNTcnMjEuMiJX!5e0!3m2!1ses!2spe!4v1437061649939" width="650" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
        		</div>
        		<div class="col-lg-5 col-sm-5" style="background-color: #222;opacity: .65;">
        			<h2 style="color: #FEA700;">Nos Ubicamos</h2>
        			<div class="space"></div>
        			<div class="col-lg-2 col-sm-2">
        				<ul class="list">
        					<h4><img src="{{asset('icono/home.jpg')}}"></h4>
        					<h4><img src="{{asset('icono/telefono.jpg')}}"></h4>
        					<h4><img src="{{asset('icono/cell.jpg')}}"></h4>
        					<h4><img src="{{asset('icono/mensaje.jpg')}}"></h4>
        				</ul>
        			</div>
        			<div class="col-lg-10 col-sm-10">
        				<ul class="list">
        					<h5 >Av. Los Heroes 1385 -San Juan de Miraflores - Lima </h5>
        					<h5 >(01) 283 1518</h5>
        					<h5 >(+51) 994 363 323</h5>
        					<h5 >institucionManaguita@gmail.com</h5>
        				</ul>
        			</div>
        		</div>
        	</div>
        </div>
    </body>
</html>
