<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\Ambiente\StoreRequest;

use App\Http\Controllers\Admin\BaseAdminController;

use App\Models\Ambiente;
use App\Models\TipoAmbiente;
use App\Models\SedeFacultad;

class AmbienteController extends BaseAdminController
{
    protected $index_route = 'sedes.facultades.ambientes.index';

    public function index($sede, $facultad)
    {
        $ambientes = Ambiente::whereSedeFacultad($sede->id, $facultad->id)->get();

        $data = [
            'sede' => $sede,
            'facultad' => $facultad,
            'ambientes' => $ambientes,
        ];

        return view('admin.ambiente.index', $data);
    }

    public function create($sede, $facultad)
    {
        $tipos_ambiente = TipoAmbiente::all();
        $sede_facultad = SedeFacultad::findBySedeFacultad($sede->id, $facultad->id);

        $data = [
            'sede' => $sede,
            'facultad' => $facultad,
            'tipos_ambiente' => $tipos_ambiente,
            'sede_facultad' => $sede_facultad,
        ];

        return view('admin.ambiente.create', $data);
    }

    public function store($sede, $facultad, StoreRequest $request)
    {
        Ambiente::create($request->all());
        return $this->redirectToIndex('Ambiente creado satisfactoriamente.', [
            'sede' => $sede->id,
            'facultad' => $facultad->id,
        ]);
    }

    public function edit($ambiente)
    {
        $tipos_ambiente = TipoAmbiente::all();
        $sede_facultad = $ambiente->sede_facultad;

        $data = [
            'sede' => $sede_facultad->sede,
            'facultad' => $sede_facultad->facultad,
            'tipos_ambiente' => $tipos_ambiente,
            'ambiente' => $ambiente,
        ];

        return view('admin.ambiente.edit', $data);
    }

    public function update($ambiente, StoreRequest $request)
    {
        $ambiente->update($request->all());
        $sede_facultad = $ambiente->sede_facultad;
        return $this->redirectToIndex('Ambiente actualizado satisfactoriamente.', [
            'sede' => $sede_facultad->sede_id,
            'facultad' => $sede_facultad->facultad_id,
        ]);
    }

    public function delete($ambiente)
    {
        $sede_facultad = $ambiente->sede_facultad;
        $ambiente->delete();
        return $this->redirectToIndex('Ambiente eliminado satisfactoriamente.', [
            'sede' => $sede_facultad->sede_id,
            'facultad' => $sede_facultad->facultad_id,
        ]);
    }
}
