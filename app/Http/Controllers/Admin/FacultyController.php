<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Models\Faculty;

use App\Http\Requests\Admin\Faculty\StoreRequest;

class FacultyController extends Controller
{
    public function index($institution)
    {
        $faculties = $institution->faculties;

        $data = [
            'faculties' => $faculties,
            'institution' => $institution,
        ];

        return view('admin.institution.faculty.index', $data);
    }

    public function create($institution)
    {
        $data = [
            'institution' => $institution,
        ];

        return view('admin.institution.faculty.create', $data);
    }

    public function store($institution, StoreRequest $request)
    {
        $faculty = new Faculty;
        $faculty->fill($request->all());
        $faculty->institucion_id = $institution->id;
        $faculty->save();

        return redirect()
             ->route('institutions.faculties.index', ['institution' => $institution->id])
             ->with('message', 'Facultad creada satisfactoriamente.');
    }
}
