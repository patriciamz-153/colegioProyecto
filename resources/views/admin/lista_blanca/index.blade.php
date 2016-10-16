@extends('layouts.admin')

@section('content')

    @include('admin.helpers.show_message')

    <div class="row" id="app">
        <div class="panel panel-info">
            <div class="panel-heading text-center">
                <h3>Lista Blanca</h3>
                <a type="button" class="btn btn-success btn-header" title="Agregar" href="">
                  <span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span>
                </a>
            </div>
            <div class="panel-body">
                <div class="col-sm-12 col-md-10 col-md-offset-1">
                    <table class="table">
                        <thead>
                            <th>Id</th>
                            <th>IP</th>
                            <th>Usuario</th>
                        </thead>
                        <tbody>
                            @foreach($ips_lista_blanca as $ip)
                            <tr id="institucion_{{ $ip->id }}" class="row-hover" v-on:click="select_row('{{ $ip->id }}')">
                                <td>{{ $ip->id }}</td>
                                <td>{{ $ip->ip_address }}</td>
                                <td>{{ $ip->nombre_usuario }}</td>
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