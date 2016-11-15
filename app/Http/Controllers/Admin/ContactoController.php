<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests\ContactoRequest as ContactoRequest;
use App\Contacto as Contacto;
use App\Http\Controllers\Admin\BaseAdminController;
use Illuminate\Support\Facades\DB;


class ContactoController extends BaseAdminController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public $index_route = 'contacto.index';

    public function index()
    {
      $contacts = Contacto::orderBy('id', 'desc')->get();
      DB::table('contactos')->where('id',$contacts[0]->Id)->update(['read'=> 1]);
      $contacts = Contacto::orderBy('id', 'desc')->get();
      $last = $contacts[0];
      $count = count(Contacto::where('read','=',0)->get());
      return view('inbox')->with(['contactos'=>$contacts,'last'=>$last,'count'=>$count]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ContactoRequest $request)
    {
        $contacto = new Contacto;
        $contacto -> nombre=$request ->nombre;
        $contacto -> email=$request ->email;
        $contacto -> description=$request ->text;
        $contacto -> save();
        return view('contact2');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $contacts = Contacto::orderBy('id', 'desc')->get();
      DB::table('contactos')->where('id',Contacto::find($id)->Id)->update(['read'=> 1]);
      $contacts = Contacto::orderBy('id', 'desc')->get();
      $last = Contacto::find($id);
      $count = count(Contacto::where('read','=',0)->get());
      return view('inbox')->with(['contactos'=>$contacts,'last'=>$last,'count'=>$count]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
