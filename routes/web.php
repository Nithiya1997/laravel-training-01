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

Route::get('/',"App\Http\Controllers\TodoController@home");

Route::post('/store',"App\Http\Controllers\TodoController@store")->name('store');

Route::get('/edit/{id}',"App\Http\Controllers\TodoController@edit")->name('edit');

Route::post('/update/{id}',"App\Http\Controllers\TodoController@update")->name('update');

Route::post('/delete/{todo}',"App\Http\Controllers\TodoController@delete")->name('delete');