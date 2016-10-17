<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Controllers\Admin\BaseAdminController;

class ResultadoEvaluacionController extends BaseAdminController
{
    public function __construct()
    {
        parent::__construct();
        $this->index_route = 'grupos.evaluaciones.notas.show';
    }

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
        $resultados = $evaluacion->resultados;

        $data = [
            'grupo' => $grupo,
            'evaluacion' => $evaluacion,
            'resultados' => $resultados,
        ];

        return view('admin.resultado_evaluacion.edit', $data);
    }

    public function update($grupo, $evaluacion, Request $request)
    {
        $resultados = collect($request->input('resultados'));

        $resultados->transform(function($item, $key) {
            return ['nota' => $item];
        });

        $evaluacion->resultados()->sync($resultados->toArray());

        return $this->redirectToIndex(
            'Resultados actualizados.', [
                'grupo' => $grupo->id,
                'evaluacion' => $evaluacion->id
            ]
        );
    }
}
