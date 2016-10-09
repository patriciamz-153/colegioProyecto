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
    public function index(Request $request)
    {
        $escuela_id = $request->input('escuela_id');
        $escuela = Escuela::find($escuela_id);

        if($escuela)
            $planes_estudio = $escuela->planes_de_estudio()->paginate(10);
        else
            $planes_estudio = PlanEstudio::paginate(10);

        $data = [
            'planes_estudio'  => $planes_estudio,
            'escuela'         => $escuela,
        ];

        return view('admin.plan_estudio.index', $data);
    }

    public function create(Request $request)
    {
        $escuela_id = $request->input('escuela_id');
        $escuela    = Escuela::find($escuela_id);
        $escuelas   = Escuela::all();

        $data = [
            'escuela'   => $escuela,
            'escuelas'  => $escuelas,
        ];

        return view('admin.plan_estudio.create', $data);
    }

    public function store(StoreRequest $request)
    {
        $plan = PlanEstudio::create($request->all());

        return redirect()
             ->route('planes_estudio.index', ['escuela_id' => $plan->escuela_id])
             ->with('message', 'Plan de estudio creado satisfactoriamente.');
    }

    public function edit($plan)
    {
        $escuela = $plan->escuela;

        $data = [
            'plan'    => $plan,
            'escuela' => $escuela,
        ];

        return view('admin.plan_estudio.edit', $data);
    }

    public function update($plan, StoreRequest $request)
    {
        $plan->update($request->all());

        return redirect()
             ->route('planes_estudio.index', ['escuela_id' => $plan->escuela_id])
             ->with('message', 'Plan de estudio actualizado satisfactoriamente.');
    }

    public function delete($plan)
    {
        $plan->delete();

        return redirect()
             ->route('planes_estudio.index', ['escuela_id' => $plan->escuela_id])
             ->with('message', 'Plan de estudio eliminada satisfactoriamente.');
    }
}
