<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

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

    }
}
