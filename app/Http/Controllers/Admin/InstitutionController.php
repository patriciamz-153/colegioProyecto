<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Models\Institution;

use App\Http\Requests\Admin\Institution\StoreRequest;

class InstitutionController extends Controller
{
    public function index()
    {
        $institutions = Institution::all();

        $data = [
            'institutions' => $institutions,
        ];

        return view('admin.institution.index', $data);
    }

    public function create()
    {
        return view('admin.institution.create');
    }

    public function store(StoreRequest $request)
    {
        Institution::create($request->all());

        return redirect()
             ->route('institutions.index')
             ->with('message', 'Institucion creada satisfactoriamente.');
    }

    public function edit($institution)
    {
        $data = [
            'institution' => $institution,
        ];

        return view('admin.institution.edit', $data);
    }

    public function update($institution, StoreRequest $request)
    {
        $institution->nombre = $request->input('nombre');
        $institution->siglas = $request->input('siglas');
        $institution->save();

        return redirect()
             ->route('institutions.index')
             ->with('message', 'Institucion actualizada satisfactoriamente.');
    }

    public function delete($institution)
    {
        $institution->delete();

        return redirect()
             ->route('institutions.index')
             ->with('message', 'Institucion eliminada satisfactoriamente.');
    }
}
