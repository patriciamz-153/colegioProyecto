@extends('layouts.admin')

@section('content')

    @include('admin.helpers.show_message')

    <div class="row" id="app">
        <div class="panel panel-info">
            <div class="panel-heading text-center">
                <h2>{{ $sede->institucion_siglas }}</h2>
                <h3>{{ $sede->nombre }} - {{ $facultad->nombre }} - Ambientes</h3>
                <a type="button" class="btn btn-success btn-header" title="Agregar Ambiente" href="{{ route('sedes.facultades.ambientes.create', ['sede' => $sede->id, 'facultad' => $facultad->id]) }}">
                  <span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span>
                </a>
            </div>
            <div class="panel-body">
                <div class="col-sm-12 col-md-10 col-md-offset-1">
                    <table class="table">
                        <thead>
                            <th>Nombre</th>
                            <th>Tipo Ambiente</th>
                        </thead>
                        <tbody>
                            @foreach($ambientes as $ambiente)
                            <tr id="ambiente_{{ $ambiente->id }}" class="row-hover" v-on:click="select_row('{{ $ambiente->id }}')">
                                <td>{{ $ambiente->nombre }}</td>
                                <td>{{ $ambiente->tipo_ambiente->nombre }}</td>
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
    <script type="text/javascript" src="{{ asset('js/admin/ambiente/index.js') }}"></script>
@endpush