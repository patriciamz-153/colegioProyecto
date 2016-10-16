<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\Firewall;

class ListaBlancaController extends Controller
{
    public function index()
    {
        $ips_lista_blanca = Firewall::listaBlanca()->get();

        $data = [
            'ips_lista_blanca' => $ips_lista_blanca,
        ];

        return view('admin.lista_blanca.index', $data);
    }
}
