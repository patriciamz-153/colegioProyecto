@extends('layouts.admin')

@section('content')

    @include('admin.helpers.show_errors')

    <div class="row" id="app">
        <div class="panel panel-info">
            <div class="panel-heading">
                <h3 class="text-center">{{ $institution->siglas }} - Registrar Sede</h3>
            </div>
            <form class="form form-horizontal" method="POST">
            {{ csrf_field() }}
            <div class="panel-body">

                <div class="form-group">
                    <label class="col-sm-3 control-label text-left">Nombre</label>
                    <div class="col-sm-9 col-lg-6">
                        <input type="text" class="form-control" name="nombre">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label text-left">Direccion</label>
                    <div class="col-sm-9 col-lg-6">
                        <input type="text" class="form-control" name="direccion">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label text-left">Departamento</label>
                    <div class="col-sm-6">
                        <select class="form-control">
                            <option value="">Seleccione el departamento</option>
                        @foreach($departaments as $departament)
                            <option value="{{ $departament->id }}">{{ $departament->nombre }}</option>
                        @endforeach
                        </select>
                    </div>
                </div>
            </div>
            <div class="panel-footer">
                <button class="btn btn-primary">Agregar</button>
            </div>

            </form>
        </div>
    </div>

@endsection