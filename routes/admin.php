<?php

Route::group(['prefix' => 'instituciones', 'as' => 'institutions.'], function() {
    Route::get('/', ['as' => 'index', 'uses' => 'InstitutionController@index']);
});
