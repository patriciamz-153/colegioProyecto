@extends('layouts.admin')

@section('content')

    @include('admin.helpers.show_errors')

    <div class="row" id="app">
        <div class="panel panel-info">
            <div class="panel-heading text-center">
                <h2>{{ $sede->institucion_siglas }}</h2>
                <h3>{{ $sede->nombre }} - {{ $facultad->nombre }} - Nuevo Ambiente</h3>
            </div>
            <form class="form form-horizontal" method="POST">
            {{ csrf_field() }}
            <div class="panel-body">

                <div class="form-group">
                    <label class="col-sm-3 control-label text-left">Tipo de ambiente</label>
                    <div class="col-sm-5 col-lg-3">
                        <select class="form-control" name="tipo_id">
                        @foreach($tipos_ambiente as $tipo_ambiente)
                            <option value="{{ $tipo_ambiente->id }}">{{ $tipo_ambiente->nombre }}</option>
                        @endforeach
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label text-left">Nombre</label>
                    <div class="col-sm-5 col-lg-3">
                        <input type="text" class="form-control" name="nombre">
                    </div>
                </div>
            </div>
            <div class="panel-footer text-center">
                <button class="btn btn-primary">Agregar</button>
            </div>

            <input type="hidden" name="facultad_x_sede_id" value="{{ $sede_facultad->id }}">
            </form>
        </div>
    </div>

@endsection
