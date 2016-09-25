<?php

Route::group(['prefix' => 'instituciones', 'as' => 'instituciones.'], function() {
    Route::get('/', ['as' => 'index', 'uses' => 'InstitucionController@index']);
    Route::get('/nuevo', ['as' => 'create', 'uses' => 'InstitucionController@create']);
    Route::post('/nuevo', ['as' => 'store', 'uses' => 'InstitucionController@store']);

    Route::group(['prefix' => '{institucion}'], function() {
        Route::get('/editar', ['as' => 'edit', 'uses' => 'InstitucionController@edit']);
        Route::post('/editar', ['as' => 'update', 'uses' => 'InstitucionController@update']);
        Route::post('/eliminar', ['as' => 'delete', 'uses' => 'InstitucionController@delete']);

        Route::group(['prefix' => 'sedes', 'as' => 'branches.'], function() {
            Route::get('/', ['as' => 'index', 'uses' => 'BranchController@index']);
            Route::get('/nuevo', ['as' => 'create', 'uses' => 'BranchController@create']);
            Route::post('/nuevo', ['as' => 'store', 'uses' => 'BranchController@store']);

            Route::group(['prefix' => '{sede}'], function() {
                Route::get('/editar', ['as' => 'edit', 'uses' => 'BranchController@edit']);
                Route::post('/editar', ['as' => 'update', 'uses' => 'BranchController@update']);
                Route::post('/eliminar', ['as' => 'delete', 'uses' => 'BranchController@delete']);
            });
        });

        Route::group(['prefix' => 'facultades', 'as' => 'faculties.'], function() {
            Route::get('/', ['as' => 'index', 'uses' => 'FacultyController@index']);
            Route::get('/nuevo', ['as' => 'create', 'uses' => 'FacultyController@create']);
            Route::post('/nuevo', ['as' => 'store', 'uses' => 'FacultyController@store']);

            Route::group(['prefix' => '{facultad}'], function() {
                Route::get('/editar', ['as' => 'edit', 'uses' => 'FacultyController@edit']);
                Route::post('/editar', ['as' => 'update', 'uses' => 'FacultyController@update']);
                Route::post('/eliminar', ['as' => 'delete', 'uses' => 'FacultyController@delete']);
            });

        });
    });
});
