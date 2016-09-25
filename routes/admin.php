<?php

Route::group(['prefix' => 'instituciones', 'as' => 'instituciones.'], function() {
    Route::get('/', ['as' => 'index', 'uses' => 'InstitucionController@index']);
    Route::get('/nuevo', ['as' => 'create', 'uses' => 'InstitucionController@create']);
    Route::post('/nuevo', ['as' => 'store', 'uses' => 'InstitucionController@store']);

    Route::group(['prefix' => '{institucion}'], function() {
        Route::get('/editar', ['as' => 'edit', 'uses' => 'InstitucionController@edit']);
        Route::post('/editar', ['as' => 'update', 'uses' => 'InstitucionController@update']);
        Route::post('/eliminar', ['as' => 'delete', 'uses' => 'InstitucionController@delete']);

        Route::group(['prefix' => 'sedes', 'as' => 'sedes.'], function() {
            Route::get('/', ['as' => 'index', 'uses' => 'SedeController@index']);
            Route::get('/nuevo', ['as' => 'create', 'uses' => 'SedeController@create']);
            Route::post('/nuevo', ['as' => 'store', 'uses' => 'SedeController@store']);

            Route::group(['prefix' => '{sede}'], function() {
                Route::get('/editar', ['as' => 'edit', 'uses' => 'SedeController@edit']);
                Route::post('/editar', ['as' => 'update', 'uses' => 'SedeController@update']);
                Route::post('/eliminar', ['as' => 'delete', 'uses' => 'SedeController@delete']);
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
    });
});
