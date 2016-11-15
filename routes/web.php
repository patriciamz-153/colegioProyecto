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

Route::get('/', function () {return view('welcome');});
Route::get('/nosotros', function () {return view('about');});
Route::get('/ubicanos', function () {return view('location');});
Route::get('/contactenos','ContactoController@index');
Route::post('/contactenos','ContactoController@store');

Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'encuesta', 'as' => 'encuesta.'], function() {
    Route::get('/', ['as' => 'index', 'uses' => 'EncuestasController@index']);
    Route::get('/{id}', ['as'=>'encuesta','uses' => 'EncuestasController@show']);
    Route::post('/{id}', ['as'=>'encuesta1','uses' => 'EncuestasController@update']);
});
