<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

use App\Http\Requests;
use App\Encuesta as Encuesta;
use Illuminate\Support\Facades\DB;

class EncuestasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $u = Auth::user();
      $type = $u->tipo_usuario_id;
      $e = Encuesta::where('tipo_usuario_id','=',$type)->get();
      $es = [];
      foreach($e as $a){
        array_push($es,[$a->Id,json_decode($a->value)->Name]);
      }
      return view("indexEncuestas")->with('encuestas',$es);
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $encuesta = Encuesta::find($id);
      $user = Auth::user();
      if($encuesta->tipo_usuario_id == $user->tipo_usuario_id){
        $rs = DB::table('usuarios_encuestas')->where('usuario_id',$user->id)->where('encuesta_id',$encuesta->Id)->get();
        if(count($rs)==0){
          $enc = json_decode($encuesta->value);
          return view('encuesta1')->with("data",$enc);
        } else {
          return view('NoDispEncuesta');
        }
      }else{
        return redirect()->route('home');
      }
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
      $e = Encuesta::find($id);
      $encuesta = json_decode($e->value,true);
      $i = 0;
      foreach($encuesta['Section'] as $section){
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
                    $encuesta['Section'][$i]["Preguntas"][$j]['Options'][$k][$r] += 1;
                  }
                }
              }else{
                if(array_key_exists($respuesta,$option)){
                  $encuesta['Section'][$i]["Preguntas"][$j]['Options'][$k][$respuesta] += 1;
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
      $encuesta['realizado'] += 1;
      $json = json_encode($encuesta,JSON_UNESCAPED_UNICODE);
      $user = Auth::user();
      DB::table('usuarios_encuestas')->insert(['usuario_id'=>$user->id,'encuesta_id'=>$e->Id]);
      DB::table('encuestas')->where('Id', $id)->update(['value' => $json]);
      //return redirect()->route('home');
      return view('endEncuesta');
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
