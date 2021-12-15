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

Route::get('tugas4', function () {
    return view('htmltugas4');
});

Route::get('praktikum2', function () {
    return view('htmlpraktikum2');
});

Route::get('ETS',"ViewController@showFormETS") ;

Route::get('tugasphp',"ViewController@tugasPHP") ;
Route::get('acctugasphp',"ViewController@acceptMultiplication");

Route::get('isiannama',"ViewController@showForm") ;
Route::post('greetings',"ViewController@resultGreetings");

//route CRUD pegawai
Route::get('/pegawai','PegawaiController@index');
Route::get('/pegawai/tambah','PegawaiController@tambah');
Route::post('/pegawai/store','PegawaiController@store');
Route::get('/pegawai/edit/{id}','PegawaiController@edit');
Route::post('/pegawai/update','PegawaiController@update');
Route::get('/pegawai/hapus/{id}','PegawaiController@hapus');
Route::get('/pegawai/cari','PegawaiController@cari');
Route::get('/pegawai/view/{id}','PegawaiController@detail');

//route CRUD mutasi
Route::get('/mutasi','MutasiController@index2');
Route::get('/mutasi/tambah','MutasiController@tambah');
Route::post('/mutasi/store','MutasiController@store');
Route::get('/mutasi/edit/{id}','MutasiController@edit');
Route::post('/mutasi/update','MutasiController@update');
Route::get('/mutasi/hapus/{id}','MutasiController@hapus');

//route CRUD absen
Route::get('/absen','AbsenController@indexabsen');
Route::get('/absen/add','AbsenController@add');
Route::post('/absen/store','AbsenController@store');
Route::get('/absen/edit/{id}','AbsenController@edit');
Route::post('/absen/update','AbsenController@update');
Route::get('/absen/hapus/{id}','AbsenController@hapus');

//route CRUD praktikum sepeda
Route::get('/sepeda','SepedaController@index');
Route::get('/sepeda/tambah','SepedaController@tambah');
Route::post('/sepeda/store','SepedaController@store');
Route::get('/sepeda/edit/{id}','SepedaController@edit');
Route::post('/sepeda/update','SepedaController@update');
Route::get('/sepeda/hapus/{id}','SepedaController@hapus');
Route::get('/sepeda/cari','SepedaController@cari');
Route::get('/sepeda/view/{id}','SepedaController@detail');

//route CRUD UAS nilaikuliah
Route::get('/nilaikuliah','NilaiController@index');
Route::get('/nilaikuliah/tambah','NilaiController@tambah');
Route::post('/nilaikuliah/store','NilaiController@store');
