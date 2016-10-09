@extends('layouts.admin')

@section('content')

    @include('admin.helpers.show_message')

    <div class="row" id="app">
        <div class="panel panel-info">
            <div class="panel-heading text-center">
                <h3>Grupos</h3>
                <a type="button" class="btn btn-info btn-header" v-bind:href="url_evaluaciones" v-show="grupo_selected" title="Evaluaciones" transition="btn-header">
                    <i class="fa fa-inbox" aria-hidden="true"></i>
                </a>
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
    <script type="text/javascript" src="{{ asset('js/admin/grupo/index.js') }}"></script>
@endpush