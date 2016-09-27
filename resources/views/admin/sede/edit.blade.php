@extends('layouts.admin')

@section('content')

    @include('admin.helpers.show_errors')

    <div class="row" id="app">
        <div class="panel panel-info">
            <div class="panel-heading">
            @if ($institucion)
                <h3 class="text-center">{{ $institucion->siglas }} - Editar Sede</h3>
            @else
                <h3 class="text-center">Editar Sede</h3>
            @endif
            </div>
            <form class="form form-horizontal" method="POST">
            {{ csrf_field() }}
            <div class="panel-body">

                <div class="form-group">
                    <label class="col-sm-3 control-label text-left">Nombre</label>
                    <div class="col-sm-9 col-lg-6">
                        <input type="text" class="form-control" name="nombre" value="{{ $sede->nombre }}">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label text-left">Direccion</label>
                    <div class="col-sm-9 col-lg-6">
                        <input type="text" class="form-control" name="direccion" value="{{ $sede->direccion }}">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label text-left">Departamento</label>
                    <div class="col-sm-6">
                        <select class="form-control" v-model="departamento_selected">
                            <option value="">Seleccione el departamento</option>
                        @foreach($departamentos as $departamento)
                            <option value="{{ $departamento->id }}">{{ $departamento->nombre }}</option>
                        @endforeach
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label text-left">Provincia</label>
                    <div class="col-sm-6">
                        <select class="form-control" v-model="provincia_selected">
                            <option value="">Seleccione la provincia</option>
                            <option v-for="provincia in provincias" value="@{{ provincia.id }}">@{{ provincia.nombre }}</option>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label text-left">Distrito</label>
                    <div class="col-sm-6">
                        <select class="form-control" v-model="distrito_selected" name="distrito_id">
                            <option value="" selected>Seleccione el distrito</option>
                            <option v-for="distrito in distritos" value="@{{ distrito.id }}">@{{ distrito.nombre }}</option>
                        </select>
                    </div>
                </div>

            @if (is_null($institucion))
                <div class="form-group">
                    <label class="col-sm-3 control-label text-left">Institucion</label>
                    <div class="col-sm-6">
                        <select class="form-control" v-model="institucion_selected" name="institucion_id">
                            <option value="">Seleccione la institucion</option>
                        @foreach($instituciones as $institucion)
                            <option value="{{ $institucion->id }}">{{ $institucion->nombre }}</option>
                        @endforeach
                        </select>
                    </div>
                </div>
            @endif
            </div>


            <div class="panel-footer">
                <button class="btn btn-primary">Actualizar</button>
            </div>

            </form>
        </div>
    </div>

    <input type="hidden" id="departamento" value="{{ $sede->departamento_id }}">
    <input type="hidden" id="provincia" value="{{ $sede->provincia_id }}">
    <input type="hidden" id="distrito" value="{{ $sede->distrito_id }}">
    <input type="hidden" id="institucion" value="{{ $sede->institucion_id }}">
@endsection

@push('scripts')
    <script type="text/javascript" src="{{ asset('js/admin/sede/edit.js') }}"></script>
@endpush
