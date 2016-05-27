<?php

Route::auth();

//基本路由组
Route::group(['middleware' => 'web'], function () {
    Route::get('/', function () {
        return redirect('home');
    });

    Route::get('/home', 'HomeController@index');
});

//上传图片路由组, upload
Route::group([
    'prefix' => 'upload',
    'middleware' => 'web',
    'namespace' => 'Upload'
], function () {
    Route::get('upload-token', 'UploadController@uploadToken');
});


//文章路由组, article
Route::group([
    'prefix' => 'article',
    'middleware' => 'web',
    'namespace' => 'Article'
], function () {
    Route::get('create', 'ArticleController@create');
    Route::post('', 'ArticleController@store');
});

Route::group([
    'prefix' => 'api/v1',
    'namespace' => 'Api'
], function () {
    Route::get('users/{user}', 'AuthController@users');

    Route::get('token', 'AuthController@token');
});

//test end
