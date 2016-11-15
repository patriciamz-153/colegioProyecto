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
          <h3 >Mis Encuestas Disponibles</h3>
          <br/>
          <h5><a href="{{ route('encuestas.encuesta1') }}">Encuesta Socio-Económica</a></h5>
          <h5><a href="{{ route('encuestas.encuesta2') }}">Encuesta a la institución educativa para padres</a></h5>
          <h5><a href="{{ route('encuestas.encuesta3') }}">Encuesta a la institución educativa para docentes</a></h5>
        </ul>
      </div>
      <div class="col-lg-5 col-sm-5">
        <h3>Mis Resultados</h3>
        <div class="space"></div>
        <div id="linea" style="width: 50%; height: 350px; margin: 0 auto;float:left;"></div>
        <div class="col-lg-2 col-sm-2">
          
      </div>
    </div>
  </div>

  <table id="example" class="display" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Email</th>
                    <th>Comentario</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>Nombre</th>
                    <th>Email</th>
                    <th>Comentario</th>
                </tr>
            </tfoot>
            <tbody>
                <tr>
                    <td>
                        <label class="col-sm-2" for="id{{$key.$i}}"><input type="{{strtolower($pregunta->Type)}}" name="{{$pregunta->Enunciado}}@if($pregunta->Type=="Checkbox")[]@endif" id="id{{$key.$i++}}" value="{{$key}}">{{$key}}</label>
                    </td>
                    <td>TigerNixon</td>
                    <td>SystemArchitect</td>
                    <td>Edinburgh</td>
                </tr>
            </tbody>
        </table>
   </div>
@endsection