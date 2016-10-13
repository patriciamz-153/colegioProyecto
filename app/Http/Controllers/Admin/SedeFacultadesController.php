<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class SedeFacultadesController extends Controller
{
    public function index($sede)
    {
        $institucion = $sede->institucion;
        $facultades = $institucion->facultades;
        $sede_facultades = $sede->facultades;

        $data = [
            'institucion' => $institucion,
            'sede' => $sede,
            'facultades' => $facultades,
            'sede_facultades' => $sede_facultades,
        ];

        return view('admin.sede.facultades', $data);
    }

    public function store($sede, Request $request)
    {
        $sede->facultades()->sync($request->input('facultades', []));

        return redirect()
             ->route('sedes.facultades', ['sede' => $sede->id])
             ->with('message', 'Facultad de la sede actualizada.');
    }
}
