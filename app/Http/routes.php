<?php

Route::get('/', function () {
    return view('welcome');
});

Route::auth();

Route::get('/home', 'HomeController@index');

//test start
Route::group(['prefix' => 'test'],function (){
    Route::get('/', function (){
        return view('medical_record.index') ->with([

        ]);
    });
    Route::group(['prefix' => 'medical_record'],function (){
        Route::get('/', function (){
            return view('medical_record.index');
        });
        Route::get('/create', function (){
            return view('medical_record.create');
        });
    });
    Route::get('/404', function (){
        return view('errors.404');
    });
    Route::get('/500', function (){
        return view('errors.500');
    });
    Route::get('/503', function (){
        return view('errors.503');
    });
});

//test end
