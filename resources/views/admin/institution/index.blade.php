@extends('layouts.admin')

@section('content')

    @include('admin.helpers.show_message')

    <div class="row" id="app">
        <div class="panel panel-info">
            <div class="panel-heading">
                <h3 class="text-center">Instituciones</h3>
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
    <div class="row">
        <a href="{{ route('institutions.create') }}" class="btn btn-success">Agregar</a>
    </div>
@endsection

@push('scripts')
    <script type="text/javascript" src="{{ asset('js/admin/institution/index.js') }}"></script>
@endpush