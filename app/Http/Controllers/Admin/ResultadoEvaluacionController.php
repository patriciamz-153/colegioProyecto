<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ResultadoEvaluacionController extends Controller
{
    public function show($grupo, $evaluacion)
    {
        $resultados = $evaluacion->resultados;

        $data = [
            'grupo' => $grupo,
            'evaluacion' => $evaluacion,
            'resultados' => $resultados,
        ];

        return view('admin.resultado_evaluacion.index', $data);
    }

    public function edit($grupo, $evaluacion)
    {

    }

    public function update($grupo, $evaluacion)
    {

    }
}
