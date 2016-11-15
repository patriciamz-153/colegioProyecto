@extends('layouts.admin')

@section('content')

    <div class="row" id="app">
        <div class="panel panel-info">
            <div class="panel-heading text-center">
                <h3>Resultados</h3>
            </div>
            <div class="space"></div>
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
                    </tr>
                </tbody>
            </table>
  </div>

  
   </div>
@endsection