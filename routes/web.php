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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/pegawai', 'pegawaiController@index');
Route::get('/pegawai/tambah', 'pegawaiController@tambah');
Route::post('/pegawai/store', 'pegawaiController@store');
Route::get('/pegawai/edit/{id}', 'pegawaiController@edit');
Route::put('/pegawai/update/{id}', 'pegawaiController@update');
Route::get('/pegawai/hapus/{id}', 'pegawaiController@delete');