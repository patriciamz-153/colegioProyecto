<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class BaseAdminController extends Controller
{
    /**
      * Descripcion: Ruta hacia el indice del recurso
      * @var string
      */
    protected $index_route;

    /**
     * Redireccion hacia el indice del recurso
     * @param string $mensaje
     * @param array $params Arreglo de ids o prefix que se necesite para llegar al index
     * @return type
     */
    protected function redirectToIndex($mensaje, $params = [])
    {
        if ($this->index_route)
            return redirect()
                 ->route($this->index_route, $params)
                 ->with(['message' => $mensaje]);
    }
}
