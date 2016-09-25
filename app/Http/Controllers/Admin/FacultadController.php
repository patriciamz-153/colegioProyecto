<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Models\Facultad;

use App\Http\Requests\Admin\facultad\StoreRequest;

class FacultadController extends Controller
{
    public function index($institucion)
    {
        $facultades = $institucion->facultades;

        $data = [
            'facultades' => $facultades,
            'institucion' => $institucion,
        ];

        return view('admin.institucion.facultad.index', $data);
    }

    public function create($institucion)
    {
        $data = [
            'institucion' => $institucion,
        ];

        return view('admin.institucion.facultad.create', $data);
    }

    public function store($institucion, StoreRequest $request)
    {
        $facultad = new Facultad;
        $facultad->fill($request->all());
        $facultad->institucion_id = $institucion->id;
        $facultad->save();

        return redirect()
             ->route('instituciones.facultades.index', ['institucion' => $institucion->id])
             ->with('message', 'Facultad creada satisfactoriamente.');
    }

    public function edit($institucion, $facultad)
    {
        $data = [
            'institucion' => $institucion,
            'facultad' => $facultad,
        ];

        return view('admin.institucion.facultad.edit', $data);
    }

    public function update($institucion, $facultad, StoreRequest $request)
    {
        $facultad->fill($request->all());
        $facultad->save();

        return redirect()
             ->route('instituciones.facultades.index', ['institucion' => $institucion->id])
             ->with('message', 'Facultad actualizada satisfactoriamente.');
    }

    public function delete($institucion, $facultad)
    {
        $facultad->delete();

        return redirect()
             ->route('instituciones.facultades.index', ['institucion' => $institucion->id])
             ->with('message', 'Facultad eliminada satisfactoriamente.');
    }
}
