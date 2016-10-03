@extends('layouts.admin')

@section('content')

    @include('admin.helpers.show_errors')

    <div class="row" id="app">
        <div class="panel panel-info">
            <div class="panel-heading text-center">
            @if ($facultad)
                <h3 class="text-center">{{ $facultad->nombre }} - Registrar EAP</h3>
                <input type="hidden" id="facultad_id" name="facultad_id" value="{{ $facultad->id }}">
            @else
                <h3 class="text-center">Registrar EAP</h3>
            @endif
            </div>
            <form class="form form-horizontal" method="POST">
            {{ csrf_field() }}
            <div class="panel-body">

                <div class="form-group">
                    <label class="col-sm-3 control-label text-left">Nombre</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="nombre">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label text-left">Codigo</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="codigo">
                    </div>
                </div>

                @if (is_null($facultad))
                <div class="form-group">
                    <label class="col-sm-3 control-label text-left">Facultad</label>
                    <div class="col-sm-6">
                        <select class="form-control" v-model="facultad_selected" name="facultad_id">
                            <option value="">Seleccione la facultad</option>
                        @foreach($facultades as $facultad)
                            <option value="{{ $facultad->id }}">{{ $facultad->nombre }}</option>
                        @endforeach
                        </select>
                    </div>
                </div>
                @endif
            </div>
            <div class="panel-footer">
                <button class="btn btn-primary">Agregar</button>
            </div>
            </form>
        </div>
    </div>

@endsection