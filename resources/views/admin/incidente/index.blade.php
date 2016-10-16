@extends('layouts.admin')

@section('content')

    @include('admin.helpers.show_message')

    <div class="row" id="app">
        <div class="panel panel-info">
            <div class="panel-heading text-center">
                <h3>Incidentes</h3>
                <a type="button" class="btn btn-info btn-header" v-bind:href="url_show" v-show="incidente_selected" title="Mostrar detalles" transition="btn-header" >
                    <i class="fa fa-eye" aria-hidden="true"></i>
                </a>
            </div>
            <div class="panel-body">
                <div class="col-sm-12 col-md-10 col-md-offset-1">
                    <table class="table">
                        <thead>
                            <th>IP</th>
                            <th>Pais</th>
                            <th>Region</th>
                            <th>Ciudad</th>
                            <th>Fecha y Hora de registro</th>
                        </thead>
                        <tbody>
                            @foreach($incidentes as $incidente)
                            <tr id="incidente_{{ $incidente->id }}" class="row-hover" v-on:click="select_row('{{ $incidente->id }}')">
                                <td>{{ $incidente->direccion_ip }}</td>
                                <td>{{ $incidente->pais_nombre }}</td>
                                <td>{{ $incidente->region_nombre }}</td>
                                <td>{{ $incidente->ciudad }}</td>
                                <td>{{ $incidente->created_at->format('d/m/Y H:i:s') }}</td>
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
    <script type="text/javascript" src="{{ asset('js/admin/incidente/index.js') }}"></script>
@endpush