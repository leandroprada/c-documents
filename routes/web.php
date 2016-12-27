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

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::resource('documents', 'DocumentsController');
// Route::post('documents/{id}/images', 'DocumentsController@images');
Route::post('/documents/{id}/version', 'DocumentsController@version');
Route::get('/filter', 'DocumentsController@filter');

Route::resource('transmittals', 'TransmittalsController');
Route::resource('reports', 'ReportsController');
