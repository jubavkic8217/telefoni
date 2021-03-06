<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('kategorije', 'App\Http\Controllers\KategorijaController@getAll');
Route::get('kategorije/{id}', 'App\Http\Controllers\KategorijaController@getById');
Route::get('telefoni', 'App\Http\Controllers\TelefonController@getAll');
Route::get('telefoni/{id}', 'App\Http\Controllers\TelefonController@getById');
Route::post('telefoni', 'App\Http\Controllers\TelefonController@save');
Route::delete('telefoni/{id}', 'App\Http\Controllers\TelefonController@delete');
