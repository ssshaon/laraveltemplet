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
Route::get('/admin',  'UserController@dashboard');



Route::get('/admin/settings', function () {
    return view('Admin.Setting.index');
});
Auth::routes();

Route::get('/home', 'HomeController@index');
//working on user module
Route::get('/admin/users',  'UserController@index');
Route::get('/admin/user/create',  'UserController@create');

Route::post('/admin/user/store', 'UserController@store');
Route::get('/admin/user/{id}/edit','UserController@edit');
Route::post('/admin/user/{id}/update','UserController@update');
Route::post('/admin/user/{id}/delete','UserController@delete');
