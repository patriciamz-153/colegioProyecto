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

Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

Route::get('/home', 'HomeController@index');

Route::get('/departamento/{departamento}/provincias', ['as' => 'getProvincias', 'uses' => 'ProvinciaController@getByDepartamento']);
Route::get('/provincia/{provincia}/distritos', ['as' => 'getDistritos', 'uses' => 'DistritoController@getByProvincia']);

Route::get('/listar_incidentes',function(){
    return Incidente::all();
});
