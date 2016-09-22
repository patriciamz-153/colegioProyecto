@extends('layouts.admin')

@section('content')

    @include('admin.helpers.show_message')

    <div class="row" id="app">
        <div class="panel panel-info">
            <div class="panel-heading text-center">
                <h3>{{ $institution->siglas }} - Sedes</h3>
            </div>
            <div class="panel-body">
                <div class="col-sm-12 col-md-10 col-md-offset-1">
                    <table class="table">
                        <thead>
                            <th>Nombre</th>
                            <th>Distrito</th>
                        </thead>
                        <tbody>
                            @foreach($branches as $branch)
                            <tr id="branch_{{ $branch->id }}" class="row-hover" v-on:click="select_row('{{ $branch->id }}')">
                                <td>{{ $branch->nombre }}</td>
                                <td>{{ $branch->distrito_nombre }}</td>
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
    <script type="text/javascript" src="{{ asset('js/admin/institution/branch/index.js') }}"></script>
@endpush