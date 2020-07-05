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

Route::get('/', 'ArtikelController@show_erd'); //menampilkan gambar PNG/JPG/JPEG desain ERD yang sudah dibuat di soal no. 1
Route::get('/artikel', 'ArtikelController@index'); //menampilkan tabel berisi data artikel-artikel
Route::get('/artikel/create', 'ArtikelController@create'); //menampilkan form untuk membuat artikel baru
Route::post('/artikel', 'ArtikelController@store'); //menyimpan artikel baru
Route::get('/artikel/{id}', 'ArtikelController@show'); //menampilkan halaman detil (show) untuk artikel dengan id tertentu
Route::get('/artikel/{id}/edit', 'ArtikelController@edit'); //menampilkan halaman form edit untuk artikel dengan id tertentu
Route::put('/artikel/{id}', 'ArtikelController@update'); //menyimpan data dari form edit
Route::delete('/artikel/{id}', 'ArtikelController@destroy'); //menghapus data dengan id tertentu
