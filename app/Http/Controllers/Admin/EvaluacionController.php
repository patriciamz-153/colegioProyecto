<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class EvaluacionController extends Controller
{
    public function index($grupo, Request $request)
    {
        $asignatura = $grupo->asignatura_aperturada->asignatura;
        $evaluaciones = $grupo->evaluaciones()->paginate(10);

        $data = [
            'asignatura' => $asignatura,
            'evaluaciones' => $evaluaciones,
            'grupo' => $grupo,
        ];

        return view('admin.evaluacion.index', $data);
    }
}
