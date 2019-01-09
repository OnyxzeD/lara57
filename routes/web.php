<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('pages.dashboard');
});

//Route::get('/test', function () {
//    return view('layouts.master');
//});


Route::group(['middleware' => ['web']], function () {
    Route::resource('post', 'PostController');
    Route::GET('post-list', 'PostController@listData');
    Route::POST('addPost', 'PostController@addPost');
    Route::POST('editPost', 'PostController@editPost');
    Route::DELETE('deletePost', 'PostController@deletePost');
});
