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

Route::get('/show/{id}', [
   'as' => 'show', 'uses' => 'BandController@showAction'
]);

Route::get('/insert-form', [
    'as' => 'insert-form', 'uses' => 'BandController@showInsertAction'
]);

Route::post('/insert', [
    'as' => 'insert', 'uses' => 'BandController@insertAction'
]);


Route::post('/update/{id}', [
    'as' => 'update', 'uses' => 'BandController@updateAction'
]);

Route::get('/delete/{id}', [
    'as' => 'delete', 'uses' => 'BandController@deleteAction'
]);

Route::get('/show-all', [
    'as' => 'show-all', 'uses' => 'BandController@showAllAction'
]);
Route::get('/show-filtered', [
    'as' => 'show-filtered', 'uses' => 'BandController@showFiltered'
]);
