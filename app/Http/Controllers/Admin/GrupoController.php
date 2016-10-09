<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\Docente;
use App\Models\Grupo;
use Auth;

class GrupoController extends Controller
{
    public function index()
    {
        $docente_id = Auth::user()->id;
        $grupos = Grupo::where('docente_id', $docente_id)->get();

        $data = [
            'grupos' => $grupos,
        ];

        return view('admin.grupo.index', $data);
    }
}
