<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\ResultadoEvaluacion\StoreRequest;

use App\Http\Controllers\Admin\BaseAdminController;

class ResultadoEvaluacionController extends BaseAdminController
{
    protected $index_route = 'grupos.evaluaciones.notas.show';

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

    public function update($grupo, $evaluacion, StoreRequest $request)
    {
        $evaluacion->resultados()->sync($request->input('resultados'));
        return $this->redirectToIndex('Resultados actualizados.', [
            'grupo' => $grupo->id,
            'evaluacion' => $evaluacion->id
        ]);
    }
}
