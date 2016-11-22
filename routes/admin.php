<?php

Route::group(['as' => 'index.'],function(){
  Route::get('/',['as' => 'index','uses'=>'InicioController@index']);
});

Route::group(['prefix' => 'nosotros', 'as' => 'nosotros.'], function() {
    Route::get('/', ['as' => 'index', 'uses' => 'NosotrosController@index']);
});

Route::group(['prefix' => 'encuesta', 'as' => 'encuestas.'], function() {
    Route::get('{id}', ['as' => 'resultado', 'uses' => 'EncuestasController@show']);
});

Route::group(['prefix' => 'contacto', 'as' => 'contacto.'], function() {
    Route::get('/', ['as' => 'index', 'uses' => 'ContactoController@index']);
    Route::get('/{id}', ['as' => 'next', 'uses' => 'ContactoController@show']);
});

Route::group(['prefix' => 'ubicacion', 'as' => 'ubicacion.'], function() {
    Route::get('/', ['as' => 'index', 'uses' => 'UbicacionController@index']);
});

Route::get('/encuestanos','CrearEncuestasController@index');
Route::post('/encuestanos','CrearEncuestasController@store');