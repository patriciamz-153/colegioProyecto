@extends('layouts.admin')

@section('content')

    @include('admin.helpers.show_errors')

    <div class="row" id="app">
        <div class="panel panel-info">
            <div class="panel-heading text-center">
                <h3 class="text-center">{{ $institution->siglas }} - Editar Facultad</h3>
            </div>
            <form class="form form-horizontal" method="POST">
            {{ csrf_field() }}
            <div class="panel-body">

                <div class="form-group">
                    <label class="col-sm-3 control-label text-left">Nombre</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" name="nombre" value="{{ $faculty->nombre }}">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label text-left">Codigo</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" name="codigo" value="{{ $faculty->codigo }}">
                    </div>
                </div>
            </div>
            <div class="panel-footer">
                <button class="btn btn-primary">Actualizar</button>
            </div>

            <input type="hidden" id="institution_id" value="{{ $institution->id }}">

            </form>
        </div>
    </div>

@endsection