<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Models\Department;
use App\Models\Branch;

use App\Http\Requests\Admin\Branch\StoreRequest;

class BranchController extends Controller
{
    public function index($institution)
    {
        $branches = $institution->branches;

        $data = [
            'branches'    => $branches,
            'institution' => $institution,
        ];

        return view('admin.institution.branch.index', $data);
    }

    public function create($institution)
    {
        $departments = Department::all();

        $data = [
            'institution' => $institution,
            'departments' => $departments,
        ];

        return view('admin.institution.branch.create', $data);
    }

    public function store($institution, StoreRequest $request)
    {
        $branch = new Branch;
        $branch->fill($request->all());
        $branch->institucion_id = $institution->id;
        $branch->save();

        return redirect()
             ->route('institutions.branches.index', ['institution' => $institution->id])
             ->with('message', 'Sede creada satisfactoriamente.');
    }

    public function edit($institution, $branch)
    {
        $departments = Department::all();

        $data = [
            'institution' => $institution,
            'branch'      => $branch,
            'departments' => $departments,
        ];

        return view('admin.institution.branch.edit', $data);
    }

    public function update($institution, $branch, StoreRequest $request)
    {
        $branch->fill($request->all());
        $branch->save();

        return redirect()
             ->route('institutions.branches.index', ['institution' => $institution->id])
             ->with('message', 'Sede actualizada satisfactoriamente.');
    }

    public function delete($institution, $branch)
    {
        $branch->delete();

        return redirect()
             ->route('institutions.branches.index', ['institution' => $institution->id])
             ->with('message', 'Sede eliminada satisfactoriamente.');
    }
}
