<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Models\Departamento;
use App\Models\Sede;

use App\Http\Requests\Admin\Branch\StoreRequest;

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
        $departments = Department::all();

        $data = [
            'institucion' => $institucion,
            'departments' => $departments,
        ];

        return view('admin.institucion.branch.create', $data);
    }

    public function store($institucion, StoreRequest $request)
    {
        $branch = new Branch;
        $branch->fill($request->all());
        $branch->institucion_id = $institucion->id;
        $branch->save();

        return redirect()
             ->route('institucions.branches.index', ['institucion' => $institucion->id])
             ->with('message', 'Sede creada satisfactoriamente.');
    }

    public function edit($institucion, $branch)
    {
        $departments = Department::all();

        $data = [
            'institucion' => $institucion,
            'branch'      => $branch,
            'departments' => $departments,
        ];

        return view('admin.institucion.branch.edit', $data);
    }

    public function update($institucion, $branch, StoreRequest $request)
    {
        $branch->fill($request->all());
        $branch->save();

        return redirect()
             ->route('institucions.branches.index', ['institucion' => $institucion->id])
             ->with('message', 'Sede actualizada satisfactoriamente.');
    }

    public function delete($institucion, $branch)
    {
        $branch->delete();

        return redirect()
             ->route('institucions.branches.index', ['institucion' => $institucion->id])
             ->with('message', 'Sede eliminada satisfactoriamente.');
    }
}
