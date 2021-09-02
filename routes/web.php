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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('/boards', 'BoardController@index');
Route::get('/boards/edit/{id}', 'BoardController@edit');
Route::put('/boards/update/{id}', 'BoardController@update');
Route::delete('/boards/delete/{id}', 'BoardController@destroy');
Route::get('/boards/show/{id}', 'BoardController@show');
Route::get('/boards/create', 'BoardController@create');
Route::post('/boards/store', 'BoardController@store');

// Route::get('/lists', 'TodoListController@index');
Route::get('/lists/edit/{id}', 'TodoListController@edit');
Route::put('/lists/update/{id}', 'TodoListController@update');
Route::delete('/lists/delete/{id}', 'TodoListController@destroy');
Route::get('/lists/show/{id}', 'TodoListController@show');
Route::get('/lists/create/{id}', 'TodoListController@create');
Route::post('/lists/store', 'TodoListController@store');

Route::get('/todos/edit/{id}', 'TodoController@edit');
Route::put('/todos/update/{id}', 'TodoController@update');
Route::delete('/todos/delete/{id}', 'TodoController@destroy');
Route::get('/todos/show/{id}', 'TodoController@show');
Route::get('/todos/create/{id}', 'TodoController@create');
Route::post('/todos/store', 'TodoController@store');

