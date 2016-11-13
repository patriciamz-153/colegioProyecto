<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Admin\BaseAdminController;


use App\Models\Usuario;



class NosotrosController extends BaseAdminController
{
    public $index_route = 'nosotros.index';

    public function index()
    {

        return view('admin.nosotros.index');
    }

}
