@extends('layouts.admin')

@section('content')

    @include('admin.helpers.show_message')

    <div class="row" id="app">
        <form method="POST">
        <div class="panel panel-info">
            <div class="panel-heading text-center">
                <h3>{{ $institucion->siglas }} - {{ $sede->nombre }}</h3>
            </div>

            <div class="panel-body">
                <div class="col-md-6">
                    <div class="col-sm-12 col-md-10 col-md-offset-1">
                        <table class="table">
                            <thead>
                                <th>Facultades disponibles</th>
                            </thead>
                            <tbody>
                            @foreach ($facultades as $facultad)
                                @if (!in_array($facultad->id, $facultades_id))
                                <tr>
                                    <td>
                                        <span class="float-left ln-2-5">{{ $facultad->nombre }}</span>
                                        <a type="button" class="btn btn-success float-right" @click="add_facultad({{ $facultad->id }})">
                                            <span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span>
                                        </a>
                                    </td>
                                </tr>
                                @endif
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="col-sm-12 col-md-10 col-md-offset-1">
                        <table class="table">
                            <thead>
                                <th>Facultades en la Sede</th>
                            </thead>
                            <tbody>
                            @foreach ($sede_facultades as $facultad)
                                @if (in_array($facultad->id, $facultades_id))
                                <tr>
                                    <td>
                                        <span class="float-left ln-2-5">{{ $facultad->nombre }}</span>
                                        <a type="button" class="btn btn-danger float-right" @click="remove_facultad({{ $facultad->id }})">
                                            <span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>
                                        </a>
                                    </td>
                                </tr>
                                @endif
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        <div class="text-center panel-footer">
            <button class="btn btn-primary">Guardar cambios</button>
        </div>
        </form>
    </div>
@endsection

@push('scripts')
    <script type="text/javascript" src="{{ asset('js/admin/sede/facultades.js') }}"></script>
@endpush