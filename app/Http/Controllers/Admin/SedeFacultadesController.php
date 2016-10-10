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
        $facultades_id = $sede_facultades->pluck('id')->toArray();

        $data = [
            'institucion' => $institucion,
            'sede' => $sede,
            'facultades' => $facultades,
            'sede_facultades' => $sede_facultades,
            'facultades_id' => $facultades_id,
        ];

        return view('admin.sede.facultades', $data);
    }
}
