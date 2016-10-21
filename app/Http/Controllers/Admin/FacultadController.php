<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Admin\BaseAdminController;

use App\Models\Facultad;
use App\Models\Institucion;

use App\Http\Requests\Admin\Facultad\StoreRequest;

use Illuminate\Http\Request;

class FacultadController extends BaseAdminController
{
    protected $index_route = 'facultades.index';

    public function index(Request $request)
    {
        $institucion_id = $request->input('institucion');
        $institucion = Institucion::find($institucion_id);
        $facultades = Facultad::todas()->with('institucion')->paginate(10);

        $data = [
            'facultades' => $facultades,
            'institucion' => $institucion,
        ];

        return view('admin.facultad.index', $data);
    }

    public function create(Request $request)
    {
        $institucion_id = $request->input('institucion');
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
        return $this->redirectToIndex('Facultad creada satisfactoriamente.', [
            'institucion_id' => $facultad->institucion_id,
        ]);
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
        return $this->redirectToIndex('Facultad actualizada satisfactoriamente.', [
            'institucion_id' => $facultad->institucion_id,
        ]);
    }

    public function delete($facultad)
    {
        $facultad->delete();
        return $this->redirectToIndex('Facultad eliminada satisfactoriamente.');
    }
}
