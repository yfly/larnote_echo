<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('hello');
});

Route::get('note', 'NoteController@index');

Route::any('note/create', 'NoteController@create');
Route::any('note/edit/{id}', 'NoteController@edit');
Route::get('note/delete/{id}', 'NoteController@delete');

Route::any('login', 'UserController@login');
Route::any('logout', 'UserController@logout');

Route::when('note/*' , 'auth');