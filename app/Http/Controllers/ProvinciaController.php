<?php

namespace App\Http\Controllers;

class ProvinciaController extends Controller
{
    public function getByDepartamento($departamento)
    {
        return $departamento->provincias;
    }
}
