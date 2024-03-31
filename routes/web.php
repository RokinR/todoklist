<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::match(['get', 'post'], '/todolist', 'App\Http\Controllers\TodolistController@index');

Route::match(['get', 'post'], '/todolist-form', 'App\Http\Controllers\TodolistController@formCreate');

Route::match(['get', 'post'], '/', 'App\Http\Controllers\TodolistController@allZapisi');

Route::match(['get', 'post'], '/todolist-delete-{id}', 'App\Http\Controllers\TodolistController@deteleZapis');

Route::match(['get', 'post'], '/todolist-create', 'App\Http\Controllers\TodolistController@createZapis');

Route::match(['get', 'post'], '/todolist-edit-{id}', 'App\Http\Controllers\TodolistController@editZapis')->name('edit.zapis');