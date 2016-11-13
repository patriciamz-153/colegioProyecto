<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Admin\BaseAdminController;


use App\Models\Usuario;



class EncuestasController extends BaseAdminController
{
    public $index_route = 'encuestas.index';

    public function index()
    {

        return view('admin.encuestas.index');
    }

    public function encuesta1()
    {

        return view('admin.encuestas.encuesta1');
    }

    public function encuesta2()
    {

        return view('admin.encuestas.encuesta2');
    }

}