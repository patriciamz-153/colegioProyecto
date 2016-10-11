<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Models\Departamento;
use App\Models\Sede;
use App\Models\Institucion;

use App\Http\Requests\Admin\Sede\StoreRequest;

use Illuminate\Http\Request;

class SedeController extends Controller
{
    public function index(Request $request)
    {
        $institucion_id = $request->input('institucion_id');
        $institucion = Institucion::find($institucion_id);

        $sedes = Sede::todas()->paginate(10);

        $data = [
            'sedes' => $sedes,
            'institucion' => $institucion,
        ];

        return view('admin.sede.index', $data);
    }

    public function create(Request $request)
    {
        $institucion_id = $request->input('institucion_id');
        $institucion = Institucion::find($institucion_id);
        $departamentos = Departamento::all();
        $instituciones = Institucion::all();

        $data = [
            'institucion' => $institucion,
            'departamentos' => $departamentos,
            'instituciones' => $instituciones,
        ];

        return view('admin.sede.create', $data);
    }

    public function store(StoreRequest $request)
    {
        $sede = Sede::create($request->all());

        return redirect()
             ->route('sedes.index', ['institucion_id' => $sede->institucion_id])
             ->with('message', 'Sede creada satisfactoriamente.');
    }

    public function edit($sede, Request $request)
    {
        $departamentos = Departamento::all();
        $institucion = $sede->institucion;
        $instituciones = Institucion::all();

        $data = [
            'institucion' => $institucion,
            'sede'      => $sede,
            'departamentos' => $departamentos,
            'instituciones' => $instituciones,
        ];

        return view('admin.sede.edit', $data);
    }

    public function update($sede, StoreRequest $request)
    {
        $sede->update($request->all());

        return redirect()
             ->route('sedes.index', ['institucion_id' => $sede->institucion_id])
             ->with('message', 'Sede actualizada satisfactoriamente.');
    }

    public function delete($sede, Request $request)
    {
        $sede->delete();

        $institucion_id = $request->input('institucion_id');

        return redirect()
             ->route('sedes.index', ['institucion_id' => $institucion_id])
             ->with('message', 'Sede eliminada satisfactoriamente.');
    }
}
