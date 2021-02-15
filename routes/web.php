<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'App\Http\Controllers\KategorijaController@all');
Route::get('/korpa', 'App\Http\Controllers\KorpaController@view');
Route::post('/dodaj', 'App\Http\Controllers\KorpaController@add');
Route::post('/kupi', 'App\Http\Controllers\NarudzbinaController@create');
Route::get('/{kategorija}', 'App\Http\Controllers\KategorijaController@view');
Route::get('/{kategorija}/{telefon}', 'App\Http\Controllers\TelefonController@view');
