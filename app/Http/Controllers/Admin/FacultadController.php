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

        if ($institucion)
            $facultades = $institucion->facultades()->paginate(10);
        else
            $facultades = Facultad::paginate(10);

        $data = [
            'facultades' => $facultades,
            'institucion' => $institucion,
        ];

        return view('admin.facultad.index', $data);
    }

    public function create($institucion)
    {
        $data = [
            'institucion' => $institucion,
        ];

        return view('admin.facultad.create', $data);
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
