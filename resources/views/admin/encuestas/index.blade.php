@extends('layouts.admin')

@section('content')

    

    <div class="row" id="app">
        <div class="panel panel-info">

                <div class="panel-heading text-center">
                     <h3>Encuestas</h3>
                 </div>
      <div class="space"></div>
      <div class="col-lg-7 col-sm-7">
        <ul class="list">
          <h3 >Mis Encuestas </h3>
          <br/>
          <h5><a href="{{ route('encuestas.encuesta1') }}">Encuesta Socio-Económica</a></h5>
          <h5><a href="{{ route('encuestas.encuesta2') }}">Encuesta a la institución educativa</a></h5>
        </ul>
      </div>
      <div class="col-lg-5 col-sm-5">
        <h3>Mis Resultados</h3>
        <div class="space"></div>
        <div class="col-lg-2 col-sm-2">
          
      </div>
    </div>
  </div>
   </div>
@endsection