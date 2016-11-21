<?php

namespace App\Http\Controllers\Admin;

use App\Contacto as Contacto;
use App\Encuesta as Encuesta;
use App\Http\Controllers\Admin\BaseAdminController;

class InicioController extends BaseAdminController
{
    protected $index_route = 'inicio.index';

    public function index()
    {
      $e = Encuesta::all();
      $es = [];
      foreach($e as $a){
        array_push($es,[$a->Id,json_decode($a->value)->Name]);
      }
      $count = count(Contacto::where('read','=',0)->get());
      return view('indexAdmin')->with(['count'=>$count,'encuestas'=>$es]);
    }
}
