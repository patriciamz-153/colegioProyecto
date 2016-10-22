@extends('layouts.admin')

@section('content')

    @include('admin.helpers.show_message')

    <div class="row" id="app">
        <div class="panel panel-info">
            <div class="panel-heading text-center">
                <h3>Instituciones</h3>
                <a type="button" class="btn btn-success btn-header" title="Agregar" href="{{ route('instituciones.create') }}">
                  <span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span>
                </a>
                <a type="button" class="btn btn-info btn-header" v-bind:href="url_edit" v-show="institucion_selected" title="Editar" transition="btn-header" >
                  <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                </a>
                <a type="button" class="btn btn-danger btn-header"  v-bind:href="url_delete" v-show="institucion_selected" title="Eliminar" @click="delete_institucion" transition="btn-header">
                  <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                </a>
                <a type="button" class="btn btn-info btn-header" v-bind:href="url_sedes" v-show="institucion_selected" title="Sedes" transition="btn-header">
                    <i class="fa fa-building" aria-hidden="true"></i>
                </a>
                <a type="button" class="btn btn-warning btn-header" v-bind:href="url_facultades" v-show="institucion_selected" title="Facultades" transition="btn-header">
                    <i class="fa fa-university" aria-hidden="true"></i>
                </a>
                <form id="delete-institucion-form" v-bind:action="url_delete" method="POST" hidden>
                    {{ csrf_field() }}
                </form>
            </div>
            <div class="panel-body">
                <div class="col-sm-12 col-md-10 col-md-offset-1">
                    <table class="table">
                        <thead>
                            <th>Nombre</th>
                            <th>Siglas</th>
                        </thead>
                        <tbody>
                            @foreach($instituciones as $institucion)
                            <tr id="institucion_{{ $institucion->id }}" class="row-hover" v-on:click="select_row('{{ $institucion->id }}')">
                                <td>{{ $institucion->nombre }}</td>
                                <td>{{ $institucion->siglas }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="paginator-container text-center">
                {{ $instituciones->links() }}
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script type="text/javascript" src="{{ asset('js/admin/institucion/index.js') }}"></script>
@endpush