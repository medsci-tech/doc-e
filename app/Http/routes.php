<?php

Route::get('/', function () {
    return redirect('home');
});

Route::auth();

Route::get('/home', 'HomeController@index');

Route::group([
    'prefix' => 'upload',
    'middleware' => 'web',
    'namespace' => 'Upload'
], function () {
    Route::get('upload-token', 'UploadController@uploadToken');
});

Route::group([
    'prefix' => 'article',
    'middleware' => 'web',
    'namespace' => 'Article'
], function () {
    Route::get('create', 'ArticleController@create');
    Route::post('', 'ArticleController@store');
});





//test start
Route::group(['prefix' => 'test'], function () {
    Route::get('/', function () {
        return view('article.index')->with([

        ]);
    });

    Route::group(['prefix' => 'article'], function () {
        Route::get('/', function () {
            return view('article.index');
        });
        Route::get('/create', function () {
            return view('article.create');
        });
    });
    Route::get('/404', function () {
        return view('errors.404');
    });
    Route::get('/500', function () {
        return view('errors.500');
    });
    Route::get('/503', function () {
        return view('errors.503');
    });
});

//test end
