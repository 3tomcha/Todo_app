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
    return view('welcome');
});

Route::group(['prefix' => 'admin'], function() {
    Route::get('/', 'TaskController@add');
    Route::get('/', 'TaskController@index');
});
Auth::routes();

Route::get('/admin/title/{id}', 'TaskController@show')->name('admin.task');
Route::post('/admin/title/{id}', 'TaskController@store');
Route::get('/home', 'HomeController@index')->name('home');
