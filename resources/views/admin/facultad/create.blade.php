@extends('layouts.admin')

@section('content')

    @include('admin.helpers.show_errors')

    <div class="row" id="app">
        <div class="panel panel-info">
            <div class="panel-heading text-center">
            @if ($institucion)
                <h3 class="text-center">{{ $institucion->siglas }} - Registrar Facultad</h3>
                <input type="hidden" id="institucion_id" name="institucion_id" value="{{ $institucion->id }}">
            @else
                <h3 class="text-center">Registrar Facultad</h3>
            @endif
            </div>
            <form class="form form-horizontal" method="POST">
            {{ csrf_field() }}
            <div class="panel-body">

                <div class="form-group">
                    <label class="col-sm-3 control-label text-left">Nombre</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" name="nombre">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label text-left">Codigo</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" name="codigo">
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
                @else
                <input type="hidden" name="institucion_id" value="{{ $institucion->id }}">
                @endif
            </div>
            <div class="panel-footer">
                <button class="btn btn-primary">Agregar</button>
            </div>
            </form>
        </div>
    </div>

@endsection