<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/
use Illuminate\Http\Request;


Route::get('/', function () {return view('welcome');});
Route::get('/nosotros', function () {return view('about');})->name('about');
Route::get('/ubicanos', function () {return view('location');})->name('location');
Route::get('/contactenos',function(){return view('contact');})->name('contact');


Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

Route::get('/home', 'HomeController@index');
