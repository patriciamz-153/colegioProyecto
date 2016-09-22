@extends('layouts.admin')

@section('content')

    @include('admin.helpers.show_message')

    <div class="row" id="app">
        <div class="panel panel-info">
            <div class="panel-heading text-center">
                <h3 style="display: inline-block;">Instituciones</h3>
                <a type="button" class="btn btn-success btn-header" title="Agregar" href="{{ route('institutions.create') }}">
                  <span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span>
                </a>
                <a type="button" class="btn btn-info btn-header" v-bind:href="url_edit" v-show="institution_selected" title="Editar">
                  <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                </a>
                <a type="button" class="btn btn-danger btn-header"  v-bind:href="url_delete" v-show="institution_selected" title="Eliminar" @click="delete_institution">
                  <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                </a>
                <form id="delete-institution-form" v-bind:action="url_delete" method="POST" hidden>
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
                            @foreach($institutions as $institution)
                            <tr id="institution_{{ $institution->id }}" class="row-hover" v-on:click="select_row('{{ $institution->id }}')">
                                <td>{{ $institution->nombre }}</td>
                                <td>{{ $institution->siglas }}</td>
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
    <script type="text/javascript" src="{{ asset('js/admin/institution/index.js') }}"></script>
@endpush