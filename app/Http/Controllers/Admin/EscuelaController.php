<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\Escuela;
use App\Models\Facultad;

use App\Http\Requests\Admin\Escuela\StoreRequest;

class EscuelaController extends Controller
{
    public function index(Request $request)
    {
        $facultad_id = $request->input('facultad_id');
        $facultad    = Facultad::find($facultad_id);

        if ($facultad)
            $eaps = $facultad->escuelas()->paginate(10);
        else
            $eaps = Escuela::paginate(10);

        $data = [
            'eaps'      => $eaps,
            'facultad'  => $facultad,
        ];

        return view('admin.eap.index', $data);
    }

    public function create(Request $request)
    {
        $facultad_id = $request->input('facultad_id');
        $facultad    = Facultad::find($facultad_id);
        $facultades = Facultad::all();

        $data = [
            'facultad'   => $facultad,
            'facultades' => $facultades,
        ];

        return view('admin.eap.create', $data);
    }

    public function store(StoreRequest $request)
    {
        $eap = Escuela::create($request->all());

        return redirect()
             ->route('eaps.index', ['facultad_id' => $eap->facultad_id])
             ->with('message', 'EAP creada satisfactoriamente.');
    }

    public function edit($eap)
    {
        $facultad = $eap->facultad;

        $data = [
            'eap'      => $eap,
            'facultad' => $facultad,
        ];

        return view('admin.eap.edit', $data);
    }

    public function update($eap, StoreRequest $request)
    {
        $eap->fill($request->all());
        $eap->save();

        return redirect()
             ->route('eaps.index', ['facultad_id' => $eap->facultad_id])
             ->with('message', 'EAP actualizada satisfactoriamente.');
    }

    public function delete($eap)
    {
        $eap->delete();

        return redirect()
             ->route('eaps.index')
             ->with('message', 'EAP eliminada satisfactoriamente.');
    }
}
