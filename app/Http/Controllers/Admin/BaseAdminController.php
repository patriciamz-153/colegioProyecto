<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class BaseAdminController extends Controller
{
    /**
      * Description: route to the index of the resource
      * @var string
      */
    protected $index_route;

    protected function redirectToIndex($mensaje)
    {
        if ($this->index_route)
            return redirect()
                 ->route($this->index_route)
                 ->with('message', $mensaje);
    }
}
