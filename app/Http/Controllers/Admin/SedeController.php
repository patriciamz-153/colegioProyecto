<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Admin\BaseAdminController;

use App\Models\Departamento;
use App\Models\Sede;
use App\Models\Institucion;

use App\Http\Requests\Admin\Sede\StoreRequest;

use Illuminate\Http\Request;

class SedeController extends BaseAdminController
{
    protected $index_route = 'sedes.index';

    public function index(Request $request)
    {
        $institucion_id = $request->input('institucion');
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
        $institucion_id = $request->input('institucion');
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
        return $this->redirectToIndex('Sede creada satisfactoriamente.', [
            'institucion' => $sede->institucion_id
        ]);
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
        return $this->redirectToIndex('Sede actualizada satisfactoriamente.', [
            'institucion' => $sede->institucion_id
        ]);
    }

    public function delete($sede, Request $request)
    {
        $sede->delete();
        return $this->redirectToIndex('Sede eliminada satisfactoriamente.');
    }
}
