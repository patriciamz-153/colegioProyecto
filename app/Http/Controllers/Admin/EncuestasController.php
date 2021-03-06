<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Encuesta as Encuesta;
use App\Contacto as Contacto;

class EncuestasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $e = Encuesta::all();
      $es = [];
      foreach($e as $a){
        array_push($es,[$a->Id,json_decode($a->value)->Name]);
      }
      $count = count(Contacto::where('read','=',0)->get());
      return view("crearEncuesta")->with(['count'=>$count,'encuestas'=>$es]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $encuesta = new Encuesta;
      $encuesta -> value=$request -> value;
      $encuesta -> tipo_usuario_id=$request ->tipoUsuario;

      $encuesta -> save();
      $e = Encuesta::all();
      $es = [];
      foreach($e as $a){
        array_push($es,[$a->Id,json_decode($a->value)->Name]);
      }
      $count = count(Contacto::where('read','=',0)->get());
      return view('crearEncuesta')->with(['count'=>$count,'encuestas'=>$es]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $encuesta = Encuesta::findOrFail($id);
      $value = json_decode($encuesta->value);
      $count = count(Contacto::where('read','=',0)->get());
      return view('resultados')->with(['count'=>$count,'resultados'=>$value]);
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
