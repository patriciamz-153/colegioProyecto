<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\Sede;

use App\Http\Requests\Api\Sede\StoreSedeApi;

class SedeController extends Controller
{
    public function index(Request $request)
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

    public function update($id, StoreSedeApi $request)
    {
        $sede = Sede::findOrFail($id);
        $sede->update($request->all());
        return response()->json([
            'mensaje' => 'Sede actualizada satisfactoriamente.'
        ]);
    }
}
