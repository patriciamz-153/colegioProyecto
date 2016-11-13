<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Admin\BaseAdminController;
use App\Encuesta as Encuesta;

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
        // buscamos la encuesta de id 1
        $e = Encuesta::find('1');
        $encuesta = json_decode($e->value);
        //dd($encuesta);
        return view('admin.encuestas.encuesta1')->with('data',$encuesta);
    }

    public function encuesta2()
    {

        return view('admin.encuestas.encuesta2');
    }

}
