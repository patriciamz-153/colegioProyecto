<?php

namespace App\Http\Controllers;

class ProvinceController extends Controller
{
    public function getByDepartment($department)
    {
        return $department->provinces;
    }
}
