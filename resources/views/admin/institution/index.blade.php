@extends('layouts.admin')

@section('content')


    <div class="row">
        <div class="panel">
            <div class="panel-heading">
                <h3 class="text-center">Instituciones</h3>
            </div>
            <div class="panel-body">
                <div class="col-sm-8 col-sm-offset-2">
                    <table class="table">
                        <thead>
                            <th>Nombre</th>
                            <th>Siglas</th>
                        </thead>
                        <tbody>
                            @foreach($institutions as $institution)
                            <tr>
                                <td>{{ $institution->nombre }}</td>
                                <td>{{ $institution->siglas }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection