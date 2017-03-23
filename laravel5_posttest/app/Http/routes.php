<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('pengguna', 'penggunaController@awal');
Route::get('pengguna/tambah', 'penggunaController@tambah');
Route::post('pengguna/simpan', 'penggunaController@simpan');
Route::get('pengguna/edit/{pengguna}', 'penggunaController@edit');
Route::get('pengguna/{pengguna}', 'penggunaController@lihat');
Route::post('pengguna/edit/{pengguna}', 'penggunaController@update');
Route::get('pengguna/hapus/{pengguna}', 'penggunaController@hapus');


Route::get('matakuliah','matakuliahcontroller@awal');
Route::get('matakuliah/tambah','matakuliahcontroller@tambah');
Route::get('matakuliah/{matakuliah}', 'matakuliahController@lihat');
Route::post('matakuliah/simpan', 'matakuliahController@simpan');
Route::get('matakuliah/edit{matakuliah}', 'matakuliahController@edit');
Route::post('matakuliah/edit{matakuliah}', 'matakuliahController@update');
Route::get('matakuliah/hapus{matakuliah}', 'matakuliahController@hapus');



Route::get('ruangan','ruangancontroller@awal');
Route::get('ruangan/tambah','ruangancontroller@tambah');
Route::get('ruangan/{ruangan}', 'ruanganController@lihat');
Route::post('ruangan/simpan', 'ruanganController@simpan');
Route::get('ruangan/edit{ruangan}', 'ruanganController@edit');
Route::post('ruangan/edit{ruangan}', 'ruanganController@update');
Route::get('ruangan/hapus{ruangan}', 'ruanganController@hapus');



Route::get('dosen','Dosencontroller@awal');
Route::get('dosen/tambah','Dosencontroller@tambah');

Route::get('mahasiswa','mahasiswacontroller@awal');
Route::get('mahasiswa/tambah','mahasiswacontroller@tambah');


Route::get('jadwal_matakuliah','jadwal_matakuliahcontroller@awal');
Route::get('jadwal_matakuliah/tambah','jadwal_matakuliahcontroller@tambah');


Route::get('dosen_matakuliah','dosen_matakuliahcontroller@awal');
Route::get('dosen_matakuliah/tambah','dosen_matakuliahcontroller@tambah');


Route::get('/', function () {
    return view('welcome');
});

Route::get('/public', function () {
    return view('nofal');
});


