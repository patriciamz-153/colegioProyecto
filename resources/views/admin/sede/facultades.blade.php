@extends('layouts.admin')

@section('content')

    @include('admin.helpers.show_message')

    <div class="row" id="app">
        <div class="panel panel-info">
            <div class="panel-heading text-center">
                <h3>{{ $institucion->siglas }} - {{ $sede->nombre }}</h3>
            </div>

            <div class="panel-body col-md-6">
                <div class="col-sm-12 col-md-10 col-md-offset-1">
                    <table class="table">
                        <thead>
                            <th>Facultades disponibles</th>
                        </thead>
                        <tbody>
                        @foreach ($facultades as $facultad)
                            @if (!in_array($facultad->id, $facultades_id))
                            <tr>
                                <td>{{ $facultad->nombre }}</td>
                            </tr>
                            @endif
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="panel-body col-md-6">
                <div class="col-sm-12 col-md-10 col-md-offset-1">
                    <table class="table">
                        <thead>
                            <th>Facultades en la Sede</th>
                        </thead>
                        <tbody>
                        @foreach ($sede_facultades as $facultad)
                            @if (in_array($facultad->id, $facultades_id))
                            <tr>
                                <td>{{ $facultad->nombre }}</td>
                            </tr>
                            @endif
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script type="text/javascript" src="{{ asset('js/admin/sede/index.js') }}"></script>
@endpush