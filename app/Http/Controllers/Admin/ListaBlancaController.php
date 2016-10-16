<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\Firewall;
use App\Models\User;

use App\Http\Requests\Admin\ListaBlanca\StoreRequest;

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

    public function create()
    {
        $admins = User::whereAdmin()->get();

        $data = [
            'admins' => $admins,
        ];

        return view('admin.lista_blanca.create', $data);
    }

    public function store(StoreRequest $request)
    {
        Firewall::create($request->all());

        return redirect()
             ->route('lista_blanca.index')
             ->with('message', 'IP agregada satisfactoriamente.');
    }
}
