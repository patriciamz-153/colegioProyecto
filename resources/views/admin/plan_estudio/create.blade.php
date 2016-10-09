@extends('layouts.admin')

@section('content')

    @include('admin.helpers.show_errors')

    <div class="row" id="app">
        <div class="panel panel-info">
            <div class="panel-heading text-center">
            @if ($escuela)
                <h3 class="text-center">{{ $escuela->nombre }} - Registrar Plan de estudio</h3>
                <input type="hidden" id="escuela_id" name="escuela_id" value="{{ $escuela->id }}">
            @else
                <h3 class="text-center">Registrar Plan de estudio</h3>
            @endif
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

                @if (is_null($escuela))
                <div class="form-group">
                    <label class="col-sm-3 control-label text-left">EAP</label>
                    <div class="col-sm-6">
                        <select class="form-control" v-model="escuela_selected" name="escuela_id">
                            <option value="">Seleccione la EAP</option>
                        @foreach($escuelas as $escuela)
                            <option value="{{ $escuela->id }}">{{ $escuela->nombre }}</option>
                        @endforeach
                        </select>
                    </div>
                </div>
                @endif
            </div>
            <div class="panel-footer">
                <button class="btn btn-primary">Agregar</button>
            </div>
            </form>
        </div>
    </div>

@endsection