@extends('layouts.admin')

@section('content')

    @include('admin.helpers.show_errors')

    <div class="row" id="app">
        <div class="panel panel-info">
            <div class="panel-heading">
                <h3 class="text-center">Registrar IP a la Lista Blanca</h3>
            </div>
            <form class="form form-horizontal" method="POST">
            {{ csrf_field() }}
            <div class="panel-body">

                <div class="form-group">
                    <label class="col-sm-3 control-label text-left">Usuario</label>
                    <div class="col-sm-6">
                        <select class="form-control" name="usuario_id">
                        @foreach($admins as $admin)
                            <option value="{{ $admin->id }}">{{ $admin->nombre_completo }}</option>
                        @endforeach
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label text-left">IP</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" name="ip_address" pattern="^(?:[0-9]{1,3}\.){3}[0-9]{1,3}$" title="Example: 172.60.50.120">
                    </div>
                </div>
            </div>
            <div class="panel-footer text-center">
                <button class="btn btn-primary">Agregar</button>
            </div>

            <input type="hidden" name="whitelisted" value="1">
            </form>
        </div>
    </div>

@endsection
