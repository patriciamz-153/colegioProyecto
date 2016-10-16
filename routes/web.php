<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/
use Illuminate\Http\Request;

use App\Models\Incidente;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/departamento/{departamento}/provincias', ['as' => 'getProvincias', 'uses' => 'ProvinciaController@getByDepartamento']);
Route::get('/provincia/{provincia}/distritos', ['as' => 'getDistritos', 'uses' => 'DistritoController@getByProvincia']);

Route::get('/listar_incidentes',function(){
    return Incidente::all();
});
