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
                      <li><a href="index.html">Resultados</a></li>
                      <li><a href="{{url('admin/encuestanos')}}">Encuestas</a></li>
                    </ul>
                  </li>
                  <li><a href="{{url('admin/contacto')}}"><i class="fa fa-newspaper-o"></i> Contactenos
                    
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
                <h3>Encuestas <small></small></h3>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Encuestas<small></small></h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <div class="row">

                      <div class="col-sm-3 mail_list_column">
                         <button id="compose" class="btn btn-sm btn-success btn-block" type="button">CREAR ENCUESTA</button>
                         <div class="row">

                          @foreach($encuestas as $encuesta)
                           <a ><span class="glyphicon glyphicon-triangle-right" aria-hidden="true"></span> {{$encuesta[1]}}</a><br>
                          @endforeach
                        </div>
                      </div>
                      <!-- /MAIL LIST -->

                      <!-- CONTENT MAIL -->
                      <div class="col-sm-9">
                        
                        <div class="content" style="background-color: #222;opacity: .65;padding: 20px">
                        <div class="title text-left" style="font-family:Montserrat-Regular;">Crear Encuesta</div>
                        <div class="links" style="font-family:Montserrat-Regular;color:#fff">
                          <form method="POST">
                            <input type="hidden" id="_token" name="_token" value="{{ csrf_token() }}">
                            <div class="form-group">
                              <label for="value">Nombre: <span style="color:red;"><strong> *</strong></span>: </label>
                              
                                    <input type="text" class="form-control" id="nombre" name="preguntas[]" patter="[A-Za-z-\s]+[a-z]" required>
                              
                            </div>
                            <div class="form-group">
                              <label for="tipoUsuario">Tipo de Usuario <span style="color:red;"><strong> *</strong></span>: </label>
                              <select id="tipoUsuario" style="color: black;" name="tipoUsuario">
                                <option value="2" >Padre</option>
                                <option value="3">Profesor</option>
                                
                              </select>
                              
                            </div>
                            <div class="form-group">
                              <label for="text">Pregunta 1<span style="color:red;"><strong> *</strong></span>: </label>
                              <input type="text" class="form-control" id="pre1" name="preguntas[]" patter="[A-Za-z-\s]+[a-z]" required>
                            </div>
                            <div class="form-group">
                              <label for="text">Pregunta 2<span style="color:red;"><strong> *</strong></span>: </label>
                              <input type="text" class="form-control" id="pre2" name="preguntas[]" patter="[A-Za-z-\s]+[a-z]" required>
                            </div>
                            <div class="form-group">
                              <label for="text">Pregunta 3<span style="color:red;"><strong> *</strong></span>: </label>
                              <input type="text"  class="form-control" id="pre3" name="preguntas[]" patter="[A-Za-z-\s]+[a-z]" required>
                            </div>
                            <div class="form-group">
                              <label for="text">Pregunta 4<span style="color:red;"><strong> *</strong></span>: </label>
                              <input type="text"  class="form-control" id="pre4" name="preguntas[]" patter="[A-Za-z-\s]+[a-z]" required>
                            </div>
                            <div class="form-group">
                              <label for="text">Pregunta 5<span style="color:red;"><strong> *</strong></span>: </label>
                              <input type="text" class="form-control" id="pre5" name="preguntas[]" patter="[A-Za-z-\s]+[a-z]" required>
                            </div>
                            <div class="form-group">
                              <label for="text">Pregunta 6<span style="color:red;"><strong> *</strong></span>: </label>
                              <input type="text"  class="form-control" id="pre6" name="preguntas[]" patter="[A-Za-z-\s]+[a-z]" required>
                            </div>
                            <div class="form-group">
                              <label for="text">Pregunta 7<span style="color:red;"><strong> *</strong></span>: </label>
                              <input type="text" class="form-control" id="pre7" name="preguntas[]" patter="[A-Za-z-\s]+[a-z]" required>
                            </div>
                            <div class="form-group">
                              <label for="text">Pregunta 8<span style="color:red;"><strong> *</strong></span>: </label>
                              <input type="text" onchange="tomarPregunta()" class="form-control" id="pre8" name="preguntas[]" patter="[A-Za-z-\s]+[a-z]" required>
                            </div>
                            

                            <input type="text" id="final" name="value" style="display: block;">
                            
                           <input type="submit" class="btn btn-default" value="Enviar"  />
                          </form>
                        </div>
                      </div>

                      </div>
                      <!-- /CONTENT MAIL -->
                    </div>
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
            Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
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
    <!-- FastClick -->
    <script src="{{ asset('js/fastclick.js') }}"></script>
    <!-- NProgress -->
    <script src="{{ asset('js/nprogress.js') }}"></script>
    <!-- bootstrap-wysiwyg -->
    <script src="{{ asset('js/bootstrap-wysiwyg.min.js') }}"></script>
    <script src="{{ asset('js/jquery.hotkeys.js') }}"></script>
    <script src="{{ asset('js/prettify.js') }}"></script>

    <!-- Custom Theme Scripts -->
    <script src="{{ asset('js/custom.min.js') }}"></script>

    <!-- bootstrap-wysiwyg -->
    <script>
      $(document).ready(function() {
        function initToolbarBootstrapBindings() {
          var fonts = ['Serif', 'Sans', 'Arial', 'Arial Black', 'Courier',
              'Courier New', 'Comic Sans MS', 'Helvetica', 'Impact', 'Lucida Grande', 'Lucida Sans', 'Tahoma', 'Times',
              'Times New Roman', 'Verdana'
            ],
            fontTarget = $('[title=Font]').siblings('.dropdown-menu');
          $.each(fonts, function(idx, fontName) {
            fontTarget.append($('<li><a data-edit="fontName ' + fontName + '" style="font-family:\'' + fontName + '\'">' + fontName + '</a></li>'));
          });
          $('a[title]').tooltip({
            container: 'body'
          });
          $('.dropdown-menu input').click(function() {
              return false;
            })
            .change(function() {
              $(this).parent('.dropdown-menu').siblings('.dropdown-toggle').dropdown('toggle');
            })
            .keydown('esc', function() {
              this.value = '';
              $(this).change();
            });

          $('[data-role=magic-overlay]').each(function() {
            var overlay = $(this),
              target = $(overlay.data('target'));
            overlay.css('opacity', 0).css('position', 'absolute').offset(target.offset()).width(target.outerWidth()).height(target.outerHeight());
          });

          if ("onwebkitspeechchange" in document.createElement("input")) {
            var editorOffset = $('#editor').offset();

            $('.voiceBtn').css('position', 'absolute').offset({
              top: editorOffset.top,
              left: editorOffset.left + $('#editor').innerWidth() - 35
            });
          } else {
            $('.voiceBtn').hide();
          }
        }

        function showErrorAlert(reason, detail) {
          var msg = '';
          if (reason === 'unsupported-file-type') {
            msg = "Unsupported format " + detail;
          } else {
            console.log("error uploading file", reason, detail);
          }
          $('<div class="alert"> <button type="button" class="close" data-dismiss="alert">&times;</button>' +
            '<strong>File upload error</strong> ' + msg + ' </div>').prependTo('#alerts');
        }

        initToolbarBootstrapBindings();

        $('#editor').wysiwyg({
          fileUploadError: showErrorAlert
        });

        prettyPrint();

      });

      var final="";
      
      function tomarPregunta(){

        final+= '{"Name":"'+document.getElementById("nombre").value + '","realizado":3,"Description":"Todos los campos son obligatorios.","Section":[{"Title":"'+document.getElementById("nombre").value + '","Description":"Lea con atención cada una de las preguntas, y escoja una sola opción. Los valores a escoger serán del 1 al 5, siendo 5 la calificación más alta y 1 la más baja.","Preguntas":[{"Enunciado":"';
        final+= document.getElementById("pre1").value+ '","Type":"Radio","Options":[{"5":1},{"4":1},{"3":0},{"2":0},{"1":0}]},{"Enunciado":"';
        final+= document.getElementById("pre2").value + '","Type":"Radio","Options":[{"5":1},{"4":1},{"3":0},{"2":0},{"1":0}]},{"Enunciado":"';
        final+= document.getElementById("pre3").value + '","Type":"Radio","Options":[{"5":1},{"4":1},{"3":0},{"2":0},{"1":0}]},{"Enunciado":"';
        final+= document.getElementById("pre4").value + '","Type":"Radio","Options":[{"5":1},{"4":1},{"3":0},{"2":0},{"1":0}]},{"Enunciado":"';
        final+= document.getElementById("pre5").value + '","Type":"Radio","Options":[{"5":1},{"4":1},{"3":0},{"2":0},{"1":0}]},{"Enunciado":"';
        final+= document.getElementById("pre6").value + '","Type":"Radio","Options":[{"5":1},{"4":1},{"3":0},{"2":0},{"1":0}]},{"Enunciado":"';
        final+= document.getElementById("pre7").value + '","Type":"Radio","Options":[{"5":1},{"4":1},{"3":0},{"2":0},{"1":0}]},{"Enunciado":"';
        final+= document.getElementById("pre8").value + '","Type":"Radio","Options":[{"5":0},{"4":1},{"3":0},{"2":0},{"1":0}]}]}]}';


        document.getElementById("final").value=final;
      }  

                            
    </script>
    <!-- /bootstrap-wysiwyg -->
  </body>
</html>
