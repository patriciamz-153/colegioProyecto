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
        $institucion_id = $request->input('institucion_id');
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
}
