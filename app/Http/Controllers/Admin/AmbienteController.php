<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\Ambiente;

class AmbienteController extends Controller
{
    public function index($sede, $facultad)
    {
        $ambientes = Ambiente::whereSedeFacultad($sede->id, $facultad->id)->get();

        $data = [
            'sede' => $sede,
            'facultad' => $facultad,
            'ambientes' => $ambientes,
        ];

        return view('admin.ambiente.index', $data);
    }
}
