@extends('layouts.admin')

@section('content')

    @include('admin.helpers.show_message')

    <div class="row" id="app">
        <div class="panel panel-info">
            <div class="panel-heading text-center">
                <h3>Grupos</h3>
            </div>
            <div class="panel-body">
                <div class="col-sm-12 col-md-10 col-md-offset-1">
                    <table class="table">
                        <thead>
                            <th>Asignatura</th>
                            <th>Numero de Grupo</th>
                        </thead>
                        <tbody>
                            @foreach($grupos as $grupo)
                            <tr id="grupo_{{ $grupo->id }}" class="row-hover" v-on:click="select_row('{{ $grupo->id }}')">
                                <td>{{ $grupo->asignatura_nombre }}</td>
                                <td>{{ $grupo->numero_grupo }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')

@endpush