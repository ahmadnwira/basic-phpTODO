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

Route::get('/notes','NotesController@index');

/* create note */
Route::get('/notes/create','NotesController@create');

Route::post('/notes','NotesController@store');

/* update note	*/
Route::get('/notes/{id}/edite','NotesController@edite');

Route::post('/notes/{note}/edite','NotesController@update');

/*  Delete Note */
Route::get('/notes/{note}','NotesController@delete');

