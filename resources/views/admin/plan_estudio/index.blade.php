@extends('layouts.admin')

@section('content')

    @include('admin.helpers.show_message')

    <div class="row" id="app">
        <div class="panel panel-info">
            <div class="panel-heading text-center">

            @if ($escuela)

                <h3>{{ $escuela->nombre }} - Planes de Estudio</h3>
                <a type="button" class="btn btn-success btn-header" title="Agregar Plan de estudio" href="{{ route('eaps.planes.create', ['eap' => $escuela->id]) }}">
                  <span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span>
                </a>

            @else

                <h3>Planes de Estudio</h3>
                <a type="button" class="btn btn-success btn-header" title="Agregar Plan de estudio" href="{{ route('eaps.planes.create') }}">
                  <span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span>
                </a>

            @endif
                <a type="button" class="btn btn-info btn-header" v-bind:href="url_edit" v-show="plan_selected" title="Editar" transition="btn-header" >
                  <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                </a>
                <a type="button" class="btn btn-danger btn-header"  v-bind:href="url_delete" v-show="plan_selected" title="Eliminar" @click="delete_plan" transition="btn-header">
                  <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                </a>
                <form id="delete-plan-form" v-bind:action="url_delete" method="POST" hidden>
                    {{ csrf_field() }}
                </form>
            </div>
            <div class="panel-body">
                <div class="col-sm-12 col-md-10 col-md-offset-1">
                    <table class="table">
                        <thead>
                            <th>Nombre</th>
                            @if(!$escuela)
                                <th>EAP</th>
                            @endif
                            <th>Vigencia</th>
                        </thead>
                        <tbody>
                            @foreach($planes_estudio as $plan_estudio)
                            <tr id="plan_{{ $plan_estudio->id }}" class="row-hover" v-on:click="select_row('{{ $plan_estudio->id }}')">
                                <td>{{ $plan_estudio->nombre }}</td>
                                @if(!$escuela)
                                    <td>{{ $plan_estudio->escuela->nombre }}</td>
                                @endif
                                <td>{{ ($plan_estudio->esta_vigente) ? 'Vigente':'No Vigente'}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <input type="hidden" id="escuela_id" value="{{ $escuela->id }}">
    </div>
@endsection

@push('scripts')
    <script type="text/javascript" src="{{ asset('js/admin/plan_estudio/index.js') }}"></script>
@endpush