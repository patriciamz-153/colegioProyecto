@extends('layouts.admin')

@section('content')

    @include('admin.helpers.show_errors')

    <div class="row" id="app">
        <div class="panel panel-info">
            <div class="panel-heading">
                <h3 class="text-center">{{ $institution->siglas }} - Editar Sede</h3>
            </div>
            <form class="form form-horizontal" method="POST">
            {{ csrf_field() }}
            <div class="panel-body">

                <div class="form-group">
                    <label class="col-sm-3 control-label text-left">Nombre</label>
                    <div class="col-sm-9 col-lg-6">
                        <input type="text" class="form-control" name="nombre" value="{{ $branch->nombre }}">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label text-left">Direccion</label>
                    <div class="col-sm-9 col-lg-6">
                        <input type="text" class="form-control" name="direccion" value="{{ $branch->direccion }}">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label text-left">Departamento</label>
                    <div class="col-sm-6">
                        <select class="form-control" v-model="department_selected">
                            <option value="">Seleccione el departamento</option>
                        @foreach($departments as $department)
                            <option value="{{ $department->id }}">{{ $department->nombre }}</option>
                        @endforeach
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label text-left">Provincia</label>
                    <div class="col-sm-6">
                        <select class="form-control" v-model="province_selected">
                            <option value="">Seleccione la provincia</option>
                            <option v-for="province in provinces" value="@{{ province.id }}">@{{ province.nombre }}</option>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label text-left">Distrito</label>
                    <div class="col-sm-6">
                        <select class="form-control" v-model="district_selected" name="distrito_id">
                            <option value="" selected>Seleccione el distrito</option>
                            <option v-for="district in districts" value="@{{ district.id }}">@{{ district.nombre }}</option>
                        </select>
                    </div>
                </div>
            </div>


            <div class="panel-footer">
                <button class="btn btn-primary">Actualizar</button>
            </div>

            </form>
        </div>
    </div>

    <input type="hidden" id="department" value="{{ $branch->departamento_id }}">
    <input type="hidden" id="province" value="{{ $branch->provincia_id }}">
    <input type="hidden" id="district" value="{{ $branch->distrito_id }}">
@endsection

@push('scripts')
    <script type="text/javascript" src="{{ asset('js/admin/institution/branch/edit.js') }}"></script>
@endpush
