@extends('layouts.admin')

@section('content')

    @include('admin.helpers.show_message')

    <div class="row" id="app">
        <div class="panel panel-info">
            <div class="panel-heading text-center">
                <h3>{{ $grupo->asignatura_nombre }} - {{ $evaluacion->tipo_evaluacion_nombre }}</h3>
            </div>

            <div class="panel-body">
                <div class="col-sm-12 col-md-10 col-md-offset-1">
                    <table class="table">
                        <thead>
                            <th>Codigo del alumno</th>
                            <th>Nota</th>
                        </thead>
                        <tbody>
                            @foreach($resultados as $resultado)
                            <tr id="resultado_{{ $resultado->id }}">
                                <td>{{ $resultado->codigo_alumno }}</td>
                                <td>{{ $resultado->nota }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="panel-footer">
                <div class="text-center">
                    <a type="button" class="btn btn-default" href="{{ route('grupos.evaluaciones.index', ['grupo' => $grupo->id]) }}">Regresar</a>
                </div>
            </div>
        </div>
    </div>
@endsection
