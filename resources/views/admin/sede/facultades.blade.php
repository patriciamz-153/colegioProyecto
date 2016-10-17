@extends('layouts.admin')

@section('content')

    @include('admin.helpers.show_message')

    <script type="text/javascript">
        window.facultades = @json($facultades)
        window.facultades_en_sede = @json($sede_facultades)
    </script>

    <div class="row" id="app">
        <form method="POST">
        {{ csrf_field() }}
        <div class="panel panel-info">
            <div class="panel-heading text-center">
                <h3>{{ $institucion->siglas }} - {{ $sede->nombre }}</h3>
            </div>

            <div class="panel-body">
                <div class="col-md-6">
                    <div class="col-sm-12 col-md-10 col-md-offset-1">
                        <table class="table" id="facultades-disponibles">
                            <thead>
                                <th>Facultades disponibles</th>
                            </thead>
                            <tbody>
                                <tr v-for="facultad in facultades_disponibles">
                                    <td id="facultad-disponible-@{{ facultad.id }}">
                                        <facultad-disponible
                                            :nombre="facultad.nombre"
                                            :facultad-id="facultad.id">
                                        </facultad-disponible>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="col-sm-12 col-md-10 col-md-offset-1">
                        <table class="table" id="sede-facultades">
                            <thead>
                                <th>Facultades en la Sede</th>
                            </thead>
                            <tbody>
                                <tr v-for="facultad in facultades_en_sede">
                                    <td id="sede-facultad-@{{ facultad.id }}">
                                        <facultad-en-sede
                                            :nombre="facultad.nombre"
                                            :facultad-id="facultad.id">
                                        </facultad-en-sede>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        <div class="text-center panel-footer">
            <button class="btn btn-primary">Guardar cambios</button>
        </div>
        </form>
        <input type="hidden" id="sede" value="{{ $sede->id }}">
    </div>
@endsection

@push('scripts')
    <script type="text/javascript" src="{{ asset('js/admin/sede/facultades.js') }}"></script>
@endpush