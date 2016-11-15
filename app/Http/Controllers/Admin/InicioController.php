<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Admin\BaseAdminController;



class InicioController extends BaseAdminController
{
    protected $index_route = 'inicio.index';

    public function index()
    {

        return redirect()->route('contacto.index');
        return view('admin.inicio.index');
    }
}
