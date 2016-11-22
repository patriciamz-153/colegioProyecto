<?php

Route::group(['as' => 'index.'],function(){
  Route::get('/',['as' => 'index','uses'=>'InicioController@index']);
});

Route::group(['prefix' => 'encuesta', 'as' => 'encuestas.'], function() {
    Route::get('nuevo', ['as' => 'crear', 'uses' => 'EncuestasController@create']);
    Route::post('nuevo',['as' => 'crear_post', 'uses' => 'EncuestasController@store']);
    Route::get('{id}', ['as' => 'resultado', 'uses' => 'EncuestasController@show']);
});

Route::group(['prefix' => 'contacto', 'as' => 'contacto.'], function() {
    Route::get('/', ['as' => 'index', 'uses' => 'ContactoController@index']);
    Route::get('/{id}', ['as' => 'next', 'uses' => 'ContactoController@show']);
});

Route::get('{nnn}',function(){abort(404);});
