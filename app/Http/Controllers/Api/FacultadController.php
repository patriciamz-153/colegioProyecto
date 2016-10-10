<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;

use App\Models\Facultad;

use App\Http\Requests\Api\Facultad\StoreFacultadApi;
use App\Http\Requests\Api\Facultad\UpdateFacultadApi;

class FacultadController extends Controller
{
    public function index()
    {
        $facultades = Facultad::todas()->get();
        return response()->json($facultades);
    }

    public function store(StoreFacultadApi $request)
    {
        Facultad::create($request->all());
        return response()->json([
            'mensaje' => 'Facultad creada.'
        ]);
    }

    public function update($id, UpdateFacultadApi $request)
    {
        $facultad = Facultad::findOrFail($id);
        $facultad->update($request->except(['institucion_id']));
        return response()->json([
            'mensaje' => 'Facultad actualizada.'
        ]);
    }
}
