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

        if ($institucion) {
            $sedes = $institucion->sedes()->paginate(10);
        }
        else {
            $sedes = Sede::paginate(10);
        }

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
