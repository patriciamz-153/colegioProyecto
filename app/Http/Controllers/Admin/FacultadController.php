<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Models\Facultad;
use App\Models\Institucion;

use App\Http\Requests\Admin\Facultad\StoreRequest;

use Illuminate\Http\Request;

class FacultadController extends Controller
{
    public function index(Request $request)
    {
        $institucion_id = $request->input('institucion_id');
        $institucion = Institucion::find($institucion_id);
        $facultades = Facultad::todas()->paginate(10);

        $data = [
            'facultades' => $facultades,
            'institucion' => $institucion,
        ];

        return view('admin.facultad.index', $data);
    }

    public function create(Request $request)
    {
        $institucion_id = $request->input('institucion_id');
        $institucion = Institucion::find($institucion_id);
        $instituciones = Institucion::all();

        $data = [
            'institucion' => $institucion,
            'instituciones' => $instituciones,
        ];

        return view('admin.facultad.create', $data);
    }

    public function store(StoreRequest $request)
    {
        $facultad = Facultad::create($request->all());

        return redirect()
             ->route('facultades.index', ['institucion_id' => $facultad->institucion_id])
             ->with('message', 'Facultad creada satisfactoriamente.');
    }

    public function edit($facultad)
    {
        $institucion = $facultad->institucion;

        $data = [
            'facultad' => $facultad,
            'institucion' => $institucion,
        ];

        return view('admin.facultad.edit', $data);
    }

    public function update($facultad, StoreRequest $request)
    {
        $facultad->update($request->all());

        return redirect()
             ->route('facultades.index', ['institucion_id' => $facultad->institucion_id])
             ->with('message', 'Facultad actualizada satisfactoriamente.');
    }

    public function delete($facultad)
    {
        $facultad->delete();

        return redirect()
             ->route('facultades.index')
             ->with('message', 'Facultad eliminada satisfactoriamente.');
    }
}
