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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/mahasiswa', 'MahasiswaController@index');

Route::get('/mahasiswa/create', 'MahasiswaController@create');
Route::post('/mahasiswa', 'MahasiswaController@store');

Route::get('mahasiswa/{ d}/edit', 'Mahas swaController@edit');
Route::patch('mahasiswa/{ d}', 'MahasiswaController@update');