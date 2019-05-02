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
Route::group(['prefix' => 'note'], function () {
    Route::get('/create',['as' => 'note.create', 'uses' => 'NotesController@create']);
    Route::post('/create',['as'=>'note.store','uses'=>'NotesController@store']);
    Route::get('/all/{num?}', ['as' => 'note.all', 'uses' => 'NotesController@index']);
});