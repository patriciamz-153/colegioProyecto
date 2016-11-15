@extends('layouts.admin')

@section('content')

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

    @endsection