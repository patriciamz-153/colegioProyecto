@extends('layouts.admin')

@section('content')

    @include('admin.helpers.show_errors')

    <div class="row" id="app">
        <div class="panel panel-info">
            <div class="panel-heading text-center">
                <h3 class="text-center">{{ $escuela->nombre }} - Registrar Plan de estudio</h3>
            </div>
            <form class="form form-horizontal" method="POST">
            {{ csrf_field() }}
            <div class="panel-body">

                <div class="form-group">
                    <label class="col-sm-3 control-label text-left">Nombre</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="nombre">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label text-left">Año de publicacion</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="anio_de_publicacion">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label text-left">Vigencia</label>
                    <div class="col-sm-6">
                        <select class="form-control" name="esta_vigente">
                            <option value="1">Vigente</option>
                            <option value="0">No Vigente</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="panel-footer">
                <button class="btn btn-primary">Agregar</button>
            </div>
            <input type="hidden" id="escuela_id" name="escuela_id" value="{{ $escuela->id }}">
            </form>
        </div>
    </div>

@endsection