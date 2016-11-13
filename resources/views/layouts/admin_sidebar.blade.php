   <div class="container" >
        <div class="navbar-header" >

           <input type="hidden" name="_token" value="2">

          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div id="navbar" class="collapse navbar-collapse" >
          <ul class="nav navbar-nav">
            <li ><a href="{{ route('inicio.index') }}" <i class="icon fa fa-university fa-2x" aria-hidden="true"></i>Inicio</a></li>
            <li ><a href="{{ route('nosotros.index') }}" <i class="icon fa fa-university fa-2x" aria-hidden="true"></i>Nosotros</a></li>
            <li ><a href="{{ route('ubicacion.index') }}" <i class="icon fa fa-university fa-2x" aria-hidden="true"></i>Ubicacion</a></li>
            <li ><a href="{{ route('encuestas.index') }}" <i class="icon fa fa-university fa-2x" aria-hidden="true"></i>Encuestas</a></li>         
            <li ><a href="{{ route('contacto.index') }}" <i class="icon fa fa-university fa-2x" aria-hidden="true"></i>Contáctenos</a></li>
            
          </ul>
        </div>
      </div>