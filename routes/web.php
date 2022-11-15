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

Route::get('/', 'App\Http\controllers\TodoListController@index')->name('todolist');

Route::post('/addtodo', 'App\Http\controllers\TodoListController@store')->name('addtodo');


Route::get('/markcomplete/{id}', 'App\Http\controllers\TodoListController@markcomplete')->name('markcomplete');

Route::delete('/delete/{id}', 'App\Http\controllers\TodoListController@delete')->name('delete');

Route::get('/edit/{id}', 'App\Http\controllers\TodoListController@edit')->name('edit');


Route::post('/edit','App\Http\controllers\TodoListController@updateTodo')->name('updateTodo');


