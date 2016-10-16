@extends('layouts.admin')

@section('content')

    @include('admin.helpers.show_errors')

    <div class="row" id="app">
        <div class="panel panel-info">
            <div class="panel-heading">
                <h3 class="text-center">Mostrar detalles Incidente</h3>
            </div>
            <div class="panel-body">

                <div class="row">
                    <label class="col-sm-offset-2 col-xs-4 control-label text-left">IP</label>
                    <label class="col-sm-6 col-xs-8 control-label text-right-mobile">{{ $incidente->direccion_ip }}</label>
                </div>

                <div class="row">
                    <label class="col-sm-offset-2 col-xs-4 control-label text-left">Pais</label>
                    <label class="col-sm-6 col-xs-8 control-label text-right-mobile">{{ $incidente->pais_nombre ?? '-' }}</label>
                </div>

                <div class="row">
                    <label class="col-sm-offset-2 col-xs-4 control-label text-left">Codigo(Pais)</label>
                    <label class="col-sm-6 col-xs-8 control-label text-right-mobile">{{ $incidente->pais_code ?? '-' }}</label>
                </div>

                <div class="row">
                    <label class="col-sm-offset-2 col-xs-4 control-label text-left">Region</label>
                    <label class="col-sm-6 col-xs-8 control-label text-right-mobile">{{ $incidente->region_nombre ?? '-' }}</label>
                </div>

                <div class="row">
                    <label class="col-sm-offset-2 col-xs-4 control-label text-left">Codigo(Region)</label>
                    <label class="col-sm-6 col-xs-8 control-label text-right-mobile">{{ $incidente->region_code ?? '-' }}</label>
                </div>

                <div class="row">
                    <label class="col-sm-offset-2 col-xs-4 control-label text-left">Ciudad</label>
                    <label class="col-sm-6 col-xs-8 control-label text-right-mobile">{{ $incidente->ciudad ?? '-' }}</label>
                </div>

                <div class="row">
                    <label class="col-sm-offset-2 col-xs-4 control-label text-left">ISP</label>
                    <label class="col-sm-6 col-xs-8 control-label text-right-mobile">{{ $incidente->isp ?? '-' }}</label>
                </div>

                <div class="row">
                    <label class="col-sm-offset-2 col-xs-4 control-label text-left">ORG</label>
                    <label class="col-sm-6 col-xs-8 control-label text-right-mobile">{{ $incidente->org ?? '-' }}</label>
                </div>

                <div class="row">
                    <label class="col-sm-offset-2 col-xs-4 control-label text-left">AS</label>
                    <label class="col-sm-6 col-xs-8 control-label text-right-mobile">{{ $incidente->as ?? '-' }}</label>
                </div>
            </div>

            <div class="panel-footer">
                <div class="text-center">
                    <a type="button" class="btn btn-default" href="{{ route('incidente.index') }}">Regresar</a>
                </div>
            </div>

            </form>
        </div>
    </div>

@endsection

@push('scripts')

@endpush