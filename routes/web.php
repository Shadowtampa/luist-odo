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
Route::get('/boards/create', 'BoardController@create');
Route::post('/boards/store', 'BoardController@store');

