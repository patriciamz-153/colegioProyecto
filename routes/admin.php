<?php

Route::group(['prefix' => 'inicio', 'as' => 'inicio.'], function() {
    Route::get('/', ['as' => 'index', 'uses' => 'InicioController@index']);
    
});

Route::group(['prefix' => 'nosotros', 'as' => 'nosotros.'], function() {
    Route::get('/', ['as' => 'index', 'uses' => 'NosotrosController@index']);

    
});

Route::group(['prefix' => 'encuestas', 'as' => 'encuestas.'], function() {
    Route::get('/', ['as' => 'index', 'uses' => 'EncuestasController@index']);
    Route::get('/encuesta1', ['as' => 'encuesta1', 'uses' => 'EncuestasController@encuesta1']);
    Route::get('/encuesta2', ['as' => 'encuesta2', 'uses' => 'EncuestasController@encuesta2']);
    Route::get('/encuesta3', ['as' => 'encuesta3', 'uses' => 'EncuestasController@encuesta3']);

});


Route::group(['prefix' => 'contacto', 'as' => 'contacto.'], function() {
    Route::get('/', ['as' => 'index', 'uses' => 'ContactoController@index']);
    Route::post('/nuevo', ['as' => 'store', 'uses' => 'ContactoController@store']);
    //Route::post('encuesta1', "ContactoController@store");
    
});

Route::group(['prefix' => 'ubicacion', 'as' => 'ubicacion.'], function() {
    Route::get('/', ['as' => 'index', 'uses' => 'UbicacionController@index']);
    
});
