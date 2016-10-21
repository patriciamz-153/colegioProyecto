<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Admin\BaseAdminController;

use App\Models\Institucion;

use App\Http\Requests\Admin\Institucion\StoreRequest;

class InstitucionController extends BaseAdminController
{
    protected $index_route = 'instituciones.index';

    public function index()
    {
        $instituciones = Institucion::paginate(10);

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
        return $this->redirectToIndex('Institucion creada satisfactoriamente.');
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
        $institucion->update($request->all());
        return $this->redirectToIndex('Institucion actualizada satisfactoriamente.');
    }

    public function delete($institucion)
    {
        $institucion->delete();
        return $this->redirectToIndex('Institucion eliminada satisfactoriamente.');
    }
}
