<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
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
}
