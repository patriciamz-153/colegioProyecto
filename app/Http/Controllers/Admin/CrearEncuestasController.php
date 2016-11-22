<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests\EncuestaRequest as EncuestaRequest;
use App\Encuesta as Encuesta;
use App\Http\Controllers\Admin\BaseAdminController;
use Illuminate\Support\Facades\DB;


class CrearEncuestasController extends BaseAdminController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public $index_route = 'encuesta.index';

    public function index()
    {
     $e = Encuesta::where('tipo_usuario_id','=','2')->get();
     
      $es = [];
      foreach($e as $a){
        array_push($es,[$a->Id,json_decode($a->value)->Name]);
      }
      return view("crearEncuesta")->with('encuestas',$es);
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
    public function store(EncuestaRequest $request)
    {
        /*
        $en = $request->input('preguntas');
        //$en = implode(",", $en);
        $i = 0;
          foreach($en['Section'] as $section){
            $j = 0;
            foreach($section['Preguntas'] as $preguntas){
              $enunciado = str_replace(" ","_",$preguntas['Enunciado']);
              $respuesta = $request->$enunciado;
              if(!is_null($respuesta)){
                $k = 0;
                foreach($preguntas['Options'] as $option){
                  if($preguntas['Type']=='Checkbox'){
                    foreach($respuesta as $r){
                      if(array_key_exists($r,$option)){
                        $en['Section'][$i]["Preguntas"][$j]['Options'][$k][$r] += 1;
                      }
                    }
                  }else{
                    if(array_key_exists($respuesta,$option)){
                      $en['Section'][$i]["Preguntas"][$j]['Options'][$k][$respuesta] += 1;
                      break;
                    }
                  }
                  $k++;
                }
              }
              $j++;
            }
            $i++;
          }
          $en['realizado'] += 1;
        $en = json_encode($enunciado,JSON_UNESCAPED_UNICODE);
        */
        $encuesta = new Encuesta;
        $encuesta -> value=$request -> value;
        $encuesta -> tipo_usuario_id=$request ->tipoUsuario;

        $encuesta -> save();
        return view('crearEncuesta1');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
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
