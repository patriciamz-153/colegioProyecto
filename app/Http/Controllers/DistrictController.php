<?php

namespace App\Http\Controllers;

class DistrictController extends Controller
{
    public function getByProvince($province)
    {
        return $province->districts;
    }
}
