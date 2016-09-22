<?php

Route::group(['prefix' => 'instituciones', 'as' => 'institutions.'], function() {
    Route::get('/', ['as' => 'index', 'uses' => 'InstitutionController@index']);
    Route::get('/nuevo', ['as' => 'create', 'uses' => 'InstitutionController@create']);
    Route::post('/nuevo', ['as' => 'store', 'uses' => 'InstitutionController@store']);

    Route::group(['prefix' => '{institution}'], function() {
        Route::get('/editar', ['as' => 'edit', 'uses' => 'InstitutionController@edit']);
        Route::post('/editar', ['as' => 'update', 'uses' => 'InstitutionController@update']);
        Route::post('/eliminar', ['as' => 'delete', 'uses' => 'InstitutionController@delete']);

        Route::group(['prefix' => 'sedes', 'as' => 'branches.'], function() {
            Route::get('/', ['as' => 'index', 'uses' => 'BranchController@index']);
            Route::get('/nuevo', ['as' => 'create', 'uses' => 'BranchController@create']);
        });
    });
});
