<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Admin\BaseAdminController;
use App\Encuesta as Encuesta;
use Illuminate\Http\Request;
use App\Models\Usuario;
use Illuminate\Support\Facades\DB;

class EncuestasController extends BaseAdminController
{
    public $index_route = 'encuestas.index';

    public function index()
    {

        return view('admin.encuestas.index');
    }

    public function encuesta1()
    {
        // buscamos la encuesta de id 1
        $e = Encuesta::find('1');
        $encuesta = json_decode($e->value);
        //dd($encuesta);
        return view('admin.encuestas.encuesta1')->with('data',$encuesta);
    }

    public function encuesta2()
    {
      // buscamos la encuesta de id 1
      $e = Encuesta::find('2');
      $encuesta = json_decode($e->value);
      //dd($encuesta);
      return view('admin.encuestas.encuesta1')->with('data',$encuesta);
    }

    public function encuesta3()
    {
      // buscamos la encuesta de id 1
      $e = Encuesta::find('3');
      $encuesta = json_decode($e->value);
      //dd($encuesta);
      return view('admin.encuestas.encuesta1')->with('data',$encuesta);
    }

    public function postEncuesta1(Request $request){
      $e = Encuesta::find('1');
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
      $json = json_encode($encuesta,JSON_UNESCAPED_UNICODE);
      DB::table('encuestas')->where('id', 1)->update(['value' => $json]);
      return redirect()->route('inicio.index');
    }

    public function postEncuesta2(Request $request){
      $e = Encuesta::find('2');
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
      $json = json_encode($encuesta,JSON_UNESCAPED_UNICODE);
      DB::table('encuestas')->where('id', 2)->update(['value' => $json]);
      return redirect()->route('inicio.index');
    }

    public function postEncuesta3(Request $request){
      $e = Encuesta::find('3');
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
      $json = json_encode($encuesta,JSON_UNESCAPED_UNICODE);
      DB::table('encuestas')->where('id', 3)->update(['value' => $json]);
      return redirect()->route('inicio.index');
    }

}
