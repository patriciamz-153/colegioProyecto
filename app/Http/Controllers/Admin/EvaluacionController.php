<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Http\Requests\Admin\Evaluacion\StoreRequest;

use App\Models\Evaluacion;
use App\Models\TipoEvaluacion;

class EvaluacionController extends Controller
{
    public function index($grupo)
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

    public function create($grupo)
    {
        $asignatura = $grupo->asignatura_aperturada->asignatura;
        $tipo_evaluaciones = TipoEvaluacion::all();

        $data = [
            'asignatura' => $asignatura,
            'grupo' => $grupo,
            'tipo_evaluaciones' => $tipo_evaluaciones,
        ];

        return view('admin.evaluacion.create', $data);
    }

    public function store($grupo, StoreRequest $request)
    {
        Evaluacion::create($request->all());

        return redirect()
             ->route('grupos.evaluaciones.index', ['grupo' => $grupo->id])
             ->with('message', 'Evaluacion creada satisfactoriamente.');
    }
}
