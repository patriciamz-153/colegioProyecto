@extends('layouts.admin')

@section('content')

    @include('admin.helpers.show_message')

    <div class="row" id="app">
        <div class="panel panel-info">
            <div class="panel-heading text-center">
                <h3>{{ $institution->siglas }} - Facultades</h3>
                <a type="button" class="btn btn-success btn-header" title="Agregar Facultad" href="{{ route('institutions.faculties.create', ['institution' => $institution->id]) }}">
                  <span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span>
                </a>
                <a type="button" class="btn btn-info btn-header" v-bind:href="url_edit" v-show="faculty_selected" title="Editar" transition="btn-header" >
                  <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                </a>
                <a type="button" class="btn btn-danger btn-header"  v-bind:href="url_delete" v-show="faculty_selected" title="Eliminar" @click="delete_faculty" transition="btn-header">
                  <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                </a>
                <form id="delete-faculty-form" v-bind:action="url_delete" method="POST" hidden>
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
                            @foreach($faculties as $faculty)
                            <tr id="faculty_{{ $faculty->id }}" class="row-hover" v-on:click="select_row('{{ $faculty->id }}')">
                                <td>{{ $faculty->nombre }}</td>
                                <td>{{ $faculty->codigo }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <a class="btn btn-info" href="{{ route('institutions.index') }}" title="Regresar a instituciones">
            <i class="fa fa-arrow-left" aria-hidden="true"></i>
        </a>
    </div>

    <input type="hidden" id="institution_id" value="{{ $institution->id }}">
@endsection

@push('scripts')
    <script type="text/javascript" src="{{ asset('js/admin/institution/faculty/index.js') }}"></script>
@endpush