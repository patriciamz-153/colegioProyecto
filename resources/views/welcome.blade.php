<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Sistema de Encuestas</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link href="{{asset('css/welcomeStyle.css')}}" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    <a href="{{ url('/login') }}">Entrar</a>
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Bienvenidos al Colegio Maranguita
                </div>

                <div class="links">
                    <h2><em>Sistema Virtual de Encuestas</em></h2>
                    <!--<a href="https://laravel.com/docs">Inicio</a>
                    <a href="https://laracasts.com">Nosotros</a>
                    <a href="https://laravel-news.com">Admisiones</a>
                    <a href="https://forge.laravel.com">Encuestas</a>
                    <a href="https://github.com/laravel/laravel">Contactenos</a>-->
                </div>
            </div>
        </div>
    </body>
</html>
