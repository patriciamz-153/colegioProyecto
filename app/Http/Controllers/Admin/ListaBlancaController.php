<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Admin\BaseAdminController;

use App\Models\Firewall;
use App\Models\User;

use App\Http\Requests\Admin\ListaBlanca\StoreRequest;
use App\Http\Requests\Admin\ListaBlanca\UpdateRequest;

class ListaBlancaController extends BaseAdminController
{
    public $index_route = 'lista_blanca.index';

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

        return $this->redirectToIndex('IP agregada a la Lista Blanca.');
    }

    public function edit($ip_lista_blanca)
    {
        $admins = User::whereAdmin()->get();

        $data = [
            'admins' => $admins,
            'ip_lista_blanca' => $ip_lista_blanca
        ];

        return view('admin.lista_blanca.edit', $data);
    }

    public function update($ip_lista_blanca, UpdateRequest $request)
    {
        $ip_lista_blanca->update($request->all());

        return $this->redirectToIndex('Registro actualizado en la Lista Blanca.');
    }

    public function delete($ip_lista_blanca)
    {
        $numero_ips = Firewall::listaBlanca()->count();

        if ($numero_ips > 1)
            $ip_lista_blanca->delete();
        else
            return $this->redirectToIndex('La IP no fue eliminada porque se debe tener al menos una en la lista blanca.');

        return $this->redirectToIndex('IP eliminada de la Lista Blanca.');
    }
}
