<?php

Route::group(['prefix' => 'instituciones', 'as' => 'instituciones.'], function() {
    Route::get('/', ['as' => 'index', 'uses' => 'InstitucionController@index']);
    Route::get('/nuevo', ['as' => 'create', 'uses' => 'InstitucionController@create']);
    Route::post('/nuevo', ['as' => 'store', 'uses' => 'InstitucionController@store']);

    Route::group(['prefix' => '{institucion}'], function() {
        Route::get('/editar', ['as' => 'edit', 'uses' => 'InstitucionController@edit']);
        Route::post('/editar', ['as' => 'update', 'uses' => 'InstitucionController@update']);
        Route::post('/eliminar', ['as' => 'delete', 'uses' => 'InstitucionController@delete']);
    });
});

Route::group(['prefix' => 'sedes', 'as' => 'sedes.'], function() {
    Route::get('/', ['as' => 'index', 'uses' => 'SedeController@index']);
    Route::get('/nuevo', ['as' => 'create', 'uses' => 'SedeController@create']);
    Route::post('/nuevo', ['as' => 'store', 'uses' => 'SedeController@store']);

    Route::group(['prefix' => '{sede}'], function() {
        Route::get('/editar', ['as' => 'edit', 'uses' => 'SedeController@edit']);
        Route::post('/editar', ['as' => 'update', 'uses' => 'SedeController@update']);
        Route::post('/eliminar', ['as' => 'delete', 'uses' => 'SedeController@delete']);

        Route::get('/facultades', ['as' => 'facultades', 'uses' => 'SedeController@facultades']);
    });
});

Route::group(['prefix' => 'facultades', 'as' => 'facultades.'], function() {
    Route::get('/', ['as' => 'index', 'uses' => 'FacultadController@index']);
    Route::get('/nuevo', ['as' => 'create', 'uses' => 'FacultadController@create']);
    Route::post('/nuevo', ['as' => 'store', 'uses' => 'FacultadController@store']);

    Route::group(['prefix' => '{facultad}'], function() {
        Route::get('/editar', ['as' => 'edit', 'uses' => 'FacultadController@edit']);
        Route::post('/editar', ['as' => 'update', 'uses' => 'FacultadController@update']);
        Route::post('/eliminar', ['as' => 'delete', 'uses' => 'FacultadController@delete']);
    });

});

Route::group(['prefix' => 'eaps', 'as' => 'eaps.'], function() {
    Route::get('/', ['as' => 'index', 'uses' => 'EscuelaController@index']);
    Route::get('/nuevo', ['as' => 'create', 'uses' => 'EscuelaController@create']);
    Route::post('/nuevo', ['as' => 'store', 'uses' => 'EscuelaController@store']);

    Route::group(['prefix' => '{eap}'], function() {
        Route::get('/editar', ['as' => 'edit', 'uses' => 'EscuelaController@edit']);
        Route::post('/editar', ['as' => 'update', 'uses' => 'EscuelaController@update']);
        Route::post('/eliminar', ['as' => 'delete', 'uses' => 'EscuelaController@delete']);
    });

});

Route::group(['prefix' => 'grupos', 'as' => 'grupos.'], function() {
    Route::get('/', ['as' => 'index', 'uses' => 'GrupoController@index']);

    Route::group(['prefix' => '{grupo}'], function() {
        Route::group(['prefix' => 'evaluaciones', 'as' => 'evaluaciones.'], function() {
            Route::get('/', ['as' => 'index', 'uses' => 'EvaluacionController@index']);
        });
    });

});

