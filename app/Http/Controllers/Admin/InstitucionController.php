<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Models\Institucion;

use App\Http\Requests\Admin\institucion\StoreRequest;

class InstitucionController extends Controller
{
    public function index()
    {
        $instituciones = Institucion::all();

        $data = [
            'instituciones' => $instituciones,
        ];

        return view('admin.institucion.index', $data);
    }

    public function create()
    {
        return view('admin.institucion.create');
    }

    public function store(StoreRequest $request)
    {
        Institucion::create($request->all());

        return redirect()
             ->route('institucions.index')
             ->with('message', 'Institucion creada satisfactoriamente.');
    }

    public function edit($institucion)
    {
        $data = [
            'institucion' => $institucion,
        ];

        return view('admin.institucion.edit', $data);
    }

    public function update($institucion, StoreRequest $request)
    {
        $institucion->nombre = $request->input('nombre');
        $institucion->siglas = $request->input('siglas');
        $institucion->save();

        return redirect()
             ->route('institucions.index')
             ->with('message', 'Institucion actualizada satisfactoriamente.');
    }

    public function delete($institucion)
    {
        $institucion->delete();

        return redirect()
             ->route('institucions.index')
             ->with('message', 'Institucion eliminada satisfactoriamente.');
    }
}
