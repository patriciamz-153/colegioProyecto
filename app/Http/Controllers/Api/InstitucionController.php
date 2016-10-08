<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Models\Institucion;

use App\Http\Controllers\Controller;

use App\Http\Requests\Api\Institucion\StoreInstitucionApi;

class InstitucionController extends Controller
{
    public function index()
    {
        $instituciones = Institucion::all();
        return response()->json($instituciones);
    }

    public function search(Request $request)
    {
        $q = $request->input('q');
        $instituciones = Institucion::search($q)->get();
        return response()->json($instituciones);
    }

    public function store(StoreInstitucionApi $request)
    {
        Institucion::create($request->all());
        return response()->json([
            'mensaje' => 'Institucion creada.'
        ]);
    }
}
