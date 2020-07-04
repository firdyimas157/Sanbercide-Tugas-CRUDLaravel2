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

// Route::get('/', function () {
//     return view('welcome');
// });

// TUGAS MVC LARAVEL - SANBERKODE
// Route::get('/', 'HomeController@index');
// Route::get('/form', 'AuthController@form');
// Route::post('/congrats', 'AuthController@congrats');
// Route::get('/congrats', 'HomeController@index');

// Route::get('/master', function () {
//     return view('adminlte.master');
// });
// TUGAS TEMPLATING BLADE
// Route::get('/', function () {
//     return view('adminlte.task');
// });

// Route::get('/pertanyaan', function () {
//     return view('pertanyaan.form');
// });
Route::get('/pertanyaan/create', 'PertanyaanController@create'); //menampilkan laman
Route::post('/pertanyaan', 'PertanyaanController@store'); //menyimpan data
Route::get('/pertanyaan', 'PertanyaanController@index'); //meanmpikan data
Route::get('/pertanyaan/{id}', 'PertanyaanController@show'); //menampilkan detail
Route::get('/pertanyaan/{id}/edit','PertanyaanController@edit'); //edit
Route::put('/pertanyaan/{id}', 'PertanyaanController@update'); //menympan perubahan
Route::delete('pertanyaan/{id}', 'PertanyaanController@destroy'); //hapus


Route::get('/jawaban/create', 'JawabanController@create'); //menampilkan laman
Route::post('/jawaban', 'JawabanController@store'); //menyimpan data
Route::get('/jawaban', 'JawabanController@index'); //meanmpikan data
Route::get('/jawaban/{id}', 'JawabanController@show'); //menampilkan detail
Route::get('/jawaban/{id}/edit','PertanyaanController@edit'); //edit
Route::put('/jawaban/{id}', 'PertanyaanController@update'); //menympan perubahan
Route::delete('/jawaban/{id}', 'PertanyaanController@destroy'); //hapus