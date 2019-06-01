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



Auth::routes();
Route::get('/', 'PostController@index');
Route::post('follow/{user}', 'FollowController@store');
Route::get('/post/create', 'PostController@create');
Route::get('/post/{po}', 'PostController@show');
Route::post('/post', 'PostController@stores');
Route::get('/profiles/{user}', 'ProfilesController@index')->name('profiles.show');
Route::get('/profiles/{user}/edit', 'ProfilesController@edit');
Route::patch('/profiles/{user}', 'ProfilesController@update');
