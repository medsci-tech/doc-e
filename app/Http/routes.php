<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});


//test start
Route::group(['prefix' => 'test'],function (){
    Route::get('/', function (){
        return view('/index');
    });
    Route::get('/404', function (){
        return view('/errors/404');
    });
    Route::get('/500', function (){
        return view('/errors/500');
    });
    Route::get('/503', function (){
        return view('/errors/503');
    });
});

//test end