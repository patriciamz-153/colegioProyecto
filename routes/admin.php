<?php

Route::group(['prefix' => 'instituciones', 'as' => 'institutions.'], function() {
    Route::get('/', ['as' => 'index', 'uses' => 'InstitutionController@index']);
    Route::get('/nuevo', ['as' => 'create', 'uses' => 'InstitutionController@create']);
    Route::post('/nuevo', ['as' => 'store', 'uses' => 'InstitutionController@store']);
    Route::get('/{id}/editar', ['as' => 'edit', 'uses' => 'InstitutionController@edit']);
    Route::post('/{id}/editar', ['as' => 'update', 'uses' => 'InstitutionController@update']);
});
