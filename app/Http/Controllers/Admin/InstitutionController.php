<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Models\Institution;

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
}
