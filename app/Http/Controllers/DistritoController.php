<?php

namespace App\Http\Controllers;

class DistritoController extends Controller
{
    public function getByProvincia($provincia)
    {
        return $provincia->distritos;
    }
}
