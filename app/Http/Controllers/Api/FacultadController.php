<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Models\Facultad;

use App\Http\Controllers\Controller;

class FacultadController extends Controller
{
    public function index()
    {
        $facultades = Facultad::todas()->get();
        return response()->json($facultades);
    }
}
