<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class BranchController extends Controller
{
    public function index($institution)
    {
        $branches = $institution->branches;

        $data = [
            'branches' => $branches,
            'institution' => $institution,
        ];

        return view('admin.institution.branch.index', $data);
    }

    public function create($institution)
    {
        $data = [
            'institution' => $institution,
        ];

        return view('admin.institution.branch.create', $data);
    }
}
