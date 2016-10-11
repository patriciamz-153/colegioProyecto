<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;

use App\Models\Sede;

use App\Http\Requests\Api\Sede\StoreSedeApi;
use App\Http\Requests\Api\Sede\UpdateSedeApi;

class SedeController extends Controller
{
    public function index()
    {
        $sedes = Sede::todas()->get();
        return response()->json($sedes);
    }

    public function store(StoreSedeApi $request)
    {
        Sede::create($request->all());
        return response()->json([
            'mensaje' => 'Sede creada satisfactoriamente.'
        ]);
    }

    public function show($id)
    {
        $sede = Sede::findOrFail($id);
        return response()->json([
            'sede' => $sede,
        ]);
    }

    public function update($id, UpdateSedeApi $request)
    {
        $sede = Sede::findOrFail($id);
        $sede->update($request->except(['institucion_id']));
        return response()->json([
            'mensaje' => 'Sede actualizada satisfactoriamente.'
        ]);
    }
}
