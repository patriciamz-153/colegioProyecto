<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Administrador | Colegio Maranguita</title>

    <!-- Bootstrap -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{ asset('css/nprogress.css') }}" rel="stylesheet">
    <!-- bootstrap-wysiwyg -->
    <link href="{{ asset('css/prettify.min.css') }}" rel="stylesheet">
    <!-- Custom styling plus plugins -->
    <link href="{{ asset('css/custom.min.css') }}" rel="stylesheet">

  </head>
  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="{{url('/home')}}" class="site_title"><i class="fa fa-mortar-board "></i> <span>Maranguita</span></a>
            </div>
            <div class="clearfix"></div>
            <!-- menu profile quick info -->
            <div class="profile">
              <div class="profile_pic">
                <img src="{{ asset('imagenes/img.jpg') }}" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Bienvenido,</span>
                <h2>{{Auth::user()->nombres}} {{Auth::user()->apellidos}}</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-cubes"></i> Encuestas <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{url('admin/')}}">Resultados</a></li>
                    </ul>
                  </li>
                  <li><a href="{{url('admin/contacto')}}"><i class="fa fa-newspaper-o"></i> Contáctenos
                    @if($count > 0)
                      <span class="label label-success pull-right">{{$count}}</span>
                    @endif
                  </a></li>
                </ul>
              </div>
            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="{{ asset('imagenes/img.jpg') }}" alt="">{{Auth::user()->nombres}} {{Auth::user()->apellidos}}
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="{{ url('/logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();"><i class="fa fa-sign-out pull-right"></i> Salir</a></li>
                    <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                  </ul>
                </li>

                <li role="presentation" class="dropdown">
                  <a href="{{ url('admin/contacto')}}" class="info-number" aria-expanded="false">
                    <i class="fa fa-envelope-o"></i>
                    @if($count > 0)<span class="badge bg-green">{{$count}}</span>@endif
                  </a>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">

            <div class="page-title">
              <div class="title_left">
                <h3>Resultados</h3>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Encuestas - {{$resultados->Name}}</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    Total de personas que realizaron la encuesta: {{$resultados->realizado}}
                    @foreach($resultados->Section as $seccion)
                    <div class="row">
                      <h2><strong>{{$seccion->Title}}</strong></h2>
                      @foreach($seccion->Preguntas as $pregunta)
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="x_panel">
                          <div class="x_title">
                            <h4>{{$pregunta->Enunciado}}</h4>
                            <div class="clearfix"></div>
                          </div>
                          <div class="x_content">
                            <canvas id="{{str_replace(' ','_',$pregunta->Enunciado)}}"></canvas>
                          </div>
                        </div>
                      </div>
                      @endforeach
                    </div>
                    @endforeach
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            © Copyright
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <!-- Bootstrap -->
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>

    <!-- NProgress -->
    <script src="{{ asset('js/nprogress.js') }}"></script>

    <script src="{{ asset('js/prettify.js') }}"></script>

    <!-- Chart.js -->
    <script src="{{ asset('js/Chart.min.js') }}"></script>

    <!-- Custom Theme Scripts -->
    <script src="{{ asset('js/custom.min.js') }}"></script>

    <!-- Chart.js -->
    <script>
      Chart.defaults.global.legend = {
        enabled: false
      };

      // Bar chart
      @foreach($resultados->Section as $seccion)
      @foreach($seccion->Preguntas as $pregunta)
      var ctx = document.getElementById("{{str_replace(' ','_',$pregunta->Enunciado)}}");
      var mybarChart = new Chart(ctx, {
        type: 'bar',
        data: {
          labels: [
            @foreach($pregunta->Options as $opcion => $valor)
            @foreach($valor as $key => $value)
            "{{$key}}",
            @endforeach
            @endforeach],
          datasets: [{
            label: '{{$pregunta->Enunciado}}',
            backgroundColor: "#26B99A",
            data: [
            @foreach($pregunta->Options as $opcion => $valor)
            @foreach($valor as $key => $value)
            "{{$value}}",
            @endforeach
            @endforeach]
          }]
        },

        options: {
          scales: {
            yAxes: [{
              ticks: {
                beginAtZero: true
              }
            }]
          }
        }
      });
      @endforeach
      @endforeach
      </script>
  </body>
</html>