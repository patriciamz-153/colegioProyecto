@extends('layouts.admin')

@section('content')

    @include('admin.helpers.show_message')

    <div class="row" id="app">
        <div class="panel panel-info">
            <div class="panel-heading text-center">
                <h3>Lista Blanca</h3>
                <a type="button" class="btn btn-success btn-header" title="Agregar" href="{{ route('lista_blanca.create') }}">
                  <span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span>
                </a>
                <a type="button" class="btn btn-info btn-header" v-bind:href="url_edit" v-show="ip_selected" title="Editar" transition="btn-header" >
                  <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                </a>
                <a type="button" class="btn btn-danger btn-header"  v-bind:href="url_delete" v-show="ip_selected" title="Eliminar" @click="delete_ip" transition="btn-header">
                  <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                </a>
                <form id="delete-institucion-form" v-bind:action="url_delete" method="POST" hidden>
                    {{ csrf_field() }}
                </form>
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
                            <tr id="ip_{{ $ip->id }}" class="row-hover" v-on:click="select_row('{{ $ip->id }}')">
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
    <script type="text/javascript" src="{{ asset('js/admin/lista_blanca/index.js') }}"></script>
@endpush