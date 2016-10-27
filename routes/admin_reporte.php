<?php

Route::group(['prefix' => 'incidentes', 'as' => 'incidentes.reportes.'], function(){
    Route::get('/por_pais', ['as' => 'byCountry', 'uses' => 'IncidenteController@getByCountry']);
});