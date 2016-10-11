<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\Escuela;
use App\Models\PlanEstudio;

use App\Http\Requests\Admin\PlanEstudio\StoreRequest;

class PlanEstudioController extends Controller
{
    public function index($escuela)
    {
        $planes_estudio = $escuela->planes_de_estudio()->paginate(10);

        $data = [
            'planes_estudio'  => $planes_estudio,
            'escuela'         => $escuela,
        ];

        return view('admin.plan_estudio.index', $data);
    }

    public function create($escuela)
    {
        $data = [
            'escuela'   => $escuela,
        ];

        return view('admin.plan_estudio.create', $data);
    }

    public function store($escuela, StoreRequest $request)
    {
        $plan = PlanEstudio::create($request->all());

        return redirect()
             ->route('eaps.planes.index', ['escuela' => $escuela->id])
             ->with('message', 'Plan de estudio creado satisfactoriamente.');
    }

    public function edit($escuela, $plan)
    {
        $data = [
            'plan'    => $plan,
            'escuela' => $escuela,
        ];

        return view('admin.plan_estudio.edit', $data);
    }

    public function update($escuela, $plan, StoreRequest $request)
    {
        $plan->update($request->all());

        return redirect()
             ->route('eaps.planes.index', ['escuela' => $escuela->id])
             ->with('message', 'Plan de estudio actualizado satisfactoriamente.');
    }

    public function delete($escuela, $plan)
    {
        $plan->delete();

        return redirect()
             ->route('eaps.planes.index', ['escuela' => $escuela->id])
             ->with('message', 'Plan de estudio eliminada satisfactoriamente.');
    }
}
