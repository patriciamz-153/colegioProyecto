@extends('layouts.admin')

@section('content')

    @include('admin.helpers.show_errors')

    <div class="row" id="app">
        <div class="panel panel-info">
            <div class="panel-heading text-center">
                <h3>{{ $grupo->asignatura_nombre }} - {{ $evaluacion->tipo_evaluacion_nombre }}</h3>
                <a type="button" class="btn btn-success btn-header" title="Notas"
                    href="{{ route('grupos.evaluaciones.notas.edit', ['grupo' => $grupo->id, 'evaluacion' => $evaluacion->id]) }}">
                    <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                </a>
            </div>

            <form class="form form-horizontal" method="POST">
            {{ csrf_field() }}
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
                                <td>
                                    <input class="form-control" type="number" value="{{ $resultado->pivot->nota }}" name="resultados[{{ $resultado->pivot->matricula_id }}][nota]">
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="panel-footer">
                <div class="text-center">
                    <button class="btn btn-primary">Actualizar</button>
                </div>
            </div>
            </form>
        </div>
    </div>
@endsection
