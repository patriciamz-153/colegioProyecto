<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;

use App\Models\Escuela;

use App\Http\Controllers\Controller;

class EscuelaController extends Controller
{
    public function index(Request $request)
    {
        $escuelas = Escuela::whereInstitucion($request->input('institucion'))->get();
        return response()->json($escuelas);
    }
}
