<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\Institucion;
use App\Models\Sede;

class SedeController extends Controller
{
    public function index(Request $request)
    {
        $institucion_id = $request->input('institucion_id');
        $sedes = Sede::todas()->get();
        return response()->json($sedes);
    }
}
