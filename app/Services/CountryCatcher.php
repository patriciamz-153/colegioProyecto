<?php

namespace App\Services;

use App\Models\Incidente;

class CountryCatcher {

    public static function fetch()
    {
        return Incidente::groupBy('pais_nombre')->pluck('pais_nombre');
    }
}