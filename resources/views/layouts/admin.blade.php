<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="shortcut icon" href="{{ url('favicon.ico') }}" />

    <!-- Styles -->
    <link href="{{ url('css/app.css') }}" rel="stylesheet">
    <link href="{{ url('css/font-awesome.min.css') }}" rel="stylesheet" >
    <link href="{{ url('css/admin/button.css') }}" rel="stylesheet">
    <link href="{{ url('css/admin/heading.css') }}" rel="stylesheet">
    <link href="{{ url('css/admin/panel.css') }}" rel="stylesheet">
    <link href="{{ url('css/admin/text.css') }}" rel="stylesheet">

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>

    <style type="text/css">
        .content {
            margin-right: 15px;
            margin-left: 15px;
            padding: 20px;
        }
        @media(screen and min-width:768px) {
            .sidebar {
                z-index: 1;
                position: absolute;
                width: 235px;
                height: calc(100% - 51px);
                border-right-width: 1px;
                border-right-style: solid;

            }
            .content {
                margin: 0px 15px 0px 250px;
                position: absolute;
                height: calc(100% - 51px);
                width: calc(100% - 265px);
                padding: 30px;
            }
        }
        @media(screen and min-width:992px) {
            .content {
                padding: 50px;
            }
        }
        .sidebar .navbar-collapse {
            padding-left: 0px;
            padding-right: 0px;
        }
        .navbar-bottom-0 {
            margin-bottom: 0px;
        }
        .nav > li > a.sidebar-link {
            padding: 15px 10px;
        }
        .sidebar-link {
            border-bottom-width: 2px;
            border-bottom-color: #008b71;
            border-bottom-style: solid;
        }
        .sidebar-link:hover {
            border-bottom-width: 0px;
            border-right-width: 5px;
            border-right-style: solid;
            border-right-color: rgba(46, 98, 247, 0.63);;
        }
        .row-hover:focus {
            cursor: pointer;
            background: #555;
            color: white;
        }
        .row-selected {
            cursor: pointer;
            background: #555;
            color: white;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-default navbar-static-top navbar-bottom-0">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    &nbsp;
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">Login</a></li>
                        <li><a href="{{ url('/register') }}">Register</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->nombre_completo }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li>
                                    <a href="{{ url('/logout') }}"
                                        onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>

                                    <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                            </ul>
                        </li>
                    @endif
                </ul>
            </div>

        </div>
    </nav>

    @if( Auth::user()->tipo_usuario_id == 1 )
        @include('layouts.admin_sidebar')
    @elseif( Auth::user()->tipo_usuario_id == 3 )
        @include('layouts.docente_sidebar')
    @endif

    <script src="{{ url('js/app.js') }}"></script>
    <script>
        window.app_url = "{{ url('/') }}";
    </script>

    <div class="content">
        @yield('content')
    </div>
    <!-- Scripts -->
    @stack('scripts')
</body>
</html>
