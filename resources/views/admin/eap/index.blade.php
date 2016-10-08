@extends('layouts.admin')

@section('content')

    @include('admin.helpers.show_message')

    <div class="row" id="app">
        <div class="panel panel-info">
            <div class="panel-heading text-center">

            @if ($facultad)

                <h3>{{ $facultad->nombre }} - EAPs</h3>
                <a type="button" class="btn btn-success btn-header" title="Agregar EAP" href="{{ route('eaps.create', ['facultad' => $facultad->id]) }}">
                  <span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span>
                </a>

            @else

                <h3>EAPs</h3>
                <a type="button" class="btn btn-success btn-header" title="Agregar EAP" href="{{ route('eaps.create') }}">
                  <span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span>
                </a>

            @endif
                <a type="button" class="btn btn-info btn-header" v-bind:href="url_edit" v-show="eap_selected" title="Editar" transition="btn-header" >
                  <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                </a>
                <a type="button" class="btn btn-danger btn-header"  v-bind:href="url_delete" v-show="eap_selected" title="Eliminar" @click="delete_eap" transition="btn-header">
                  <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                </a>
                <form id="delete-eap-form" v-bind:action="url_delete" method="POST" hidden>
                    {{ csrf_field() }}
                </form>
            </div>
            <div class="panel-body">
                <div class="col-sm-12 col-md-10 col-md-offset-1">
                    <table class="table">
                        <thead>
                            <th>Nombre</th>
                            <th>Codigo</th>
                        </thead>
                        <tbody>
                            @foreach($eaps as $eap)
                            <tr id="eap_{{ $eap->id }}" class="row-hover" v-on:click="select_row('{{ $eap->id }}')">
                                <td>{{ $eap->nombre }}</td>
                                <td>{{ $eap->codigo }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    @if ($facultad)
    <div class="row text-center">
        <a href="{{ route('eaps.index') }}" class="btn btn-default">Ver todas las eaps</a>
    </div>
    <input type="hidden" id="facultad_id" value="{{ $facultad->id }}">
    @endif
@endsection

@push('scripts')
    <script type="text/javascript" src="{{ asset('js/admin/eap/index.js') }}"></script>
@endpush