<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Models\Departamento;
use App\Models\Sede;

use App\Http\Requests\Admin\Sede\StoreRequest;

class SedeController extends Controller
{
    public function index($institucion)
    {
        $sedes = $institucion->sedes;

        $data = [
            'sedes'    => $sedes,
            'institucion' => $institucion,
        ];

        return view('admin.institucion.sede.index', $data);
    }

    public function create($institucion)
    {
        $departamentos = Departamento::all();

        $data = [
            'institucion' => $institucion,
            'departamentos' => $departamentos,
        ];

        return view('admin.institucion.sede.create', $data);
    }

    public function store($institucion, StoreRequest $request)
    {
        $sede = new sede;
        $sede->fill($request->all());
        $sede->institucion_id = $institucion->id;
        $sede->save();

        return redirect()
             ->route('instituciones.sedes.index', ['institucion' => $institucion->id])
             ->with('message', 'Sede creada satisfactoriamente.');
    }

    public function edit($institucion, $sede)
    {
        $departamentos = Departamento::all();

        $data = [
            'institucion' => $institucion,
            'sede'      => $sede,
            'departamentos' => $departamentos,
        ];

        return view('admin.institucion.sede.edit', $data);
    }

    public function update($institucion, $sede, StoreRequest $request)
    {
        $sede->fill($request->all());
        $sede->save();

        return redirect()
             ->route('instituciones.sedes.index', ['institucion' => $institucion->id])
             ->with('message', 'Sede actualizada satisfactoriamente.');
    }

    public function delete($institucion, $sede)
    {
        $sede->delete();

        return redirect()
             ->route('instituciones.sedes.index', ['institucion' => $institucion->id])
             ->with('message', 'Sede eliminada satisfactoriamente.');
    }
}
