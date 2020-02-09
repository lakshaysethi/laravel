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

Route::get('/', function () {return view('welcome');});

/*
store list of auckland suburb into database
these pages are only for admin
*/

Route::get('suburb', 'SuburbController@index');
Route::post('addSuburbAct', 'SuburbController@addSuburb');


/*sign up*/
Route::get('signUp', 'UserController@index');
Route::post('signUpAct', 'UserController@addUser');

