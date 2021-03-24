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


Route::get('/', 'MainController@index');
Route::get('/rezervacije/get', 'RezervacijaController@get');
Route::get('/rezervacije/brisanje', 'RezervacijaController@brisanje');

Route::get('/stolovi/fetch', 'StoController@fetchStolovi');
Route::post('/gosti/dodaj', 'GostController@kreirajGosta');
Route::post('/rezervacije/rezervisi', 'RezervacijaController@rezervisi');
Route::put('/sto/rezervisi', 'StoController@updateRezervisan');
