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

/*Route::get('/', function () {
    return view('landing');
});*/

Route::get('/{uri?}', function(){
    return view('landing');
})->where(['uri'=>'.*']);

Route::get('landing', function(){
    return view('landing');
});

Auth::routes();

Route::get('/home', 'HomeController@index');