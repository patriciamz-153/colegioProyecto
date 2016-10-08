<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Models\Institucion;

use App\Http\Controllers\Controller;

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
}
