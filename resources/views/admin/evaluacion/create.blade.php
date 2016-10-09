@extends('layouts.admin')

@section('content')

    @include('admin.helpers.show_errors')

    <div class="row" id="app">
        <div class="panel panel-info">
            <div class="panel-heading text-center">
                <h3 class="text-center">{{ $asignatura->nombre }} - Registrar Evaluacion</h3>
            </div>
            <form class="form form-horizontal" method="POST">
            {{ csrf_field() }}
            <div class="panel-body">

                <div class="form-group">
                    <label class="col-sm-3 control-label text-left">Tipo Evaluacion</label>
                    <div class="col-sm-4">
                        <select class="form-control" name="tipo_id">
                        @foreach($tipo_evaluaciones as $tipo_evaluacion)
                            <option value="{{ $tipo_evaluacion->id }}">{{ $tipo_evaluacion->nombre }}</option>
                        @endforeach
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label text-left">Fecha</label>
                    <div class="col-sm-4">
                        <input type="date" class="form-control" name="fecha">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label text-left">Hora de Inicio</label>
                    <div class="col-sm-4">
                        <input type="time" class="form-control" name="hora_inicio">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label text-left">Hora de Fin</label>
                    <div class="col-sm-4">
                        <input type="time" class="form-control" name="hora_fin">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label text-left">Peso</label>
                    <div class="col-sm-4">
                        <input type="number" class="form-control" name="peso">
                    </div>
                </div>
            </div>
            <div class="panel-footer">
                <button class="btn btn-primary">Agregar</button>
            </div>

            <input type="hidden" name="grupo_id" value="{{ $grupo->id }}">
            </form>
        </div>
    </div>

@endsection