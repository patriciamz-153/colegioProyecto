<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

use App\Models\Incidente;

class IncidenteController extends Controller
{
    public function index()
    {
        $incidentes = Incidente::recientes()->get();

        $data = [
            'incidentes' => $incidentes,
        ];

        return view('admin.incidente.index', $data);
    }

    public function show($incidente)
    {
        $data = [
            'incidente' => $incidente,
        ];

        return view('admin.incidente.show', $data);
    }
}
