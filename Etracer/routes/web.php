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
//beranda
Route::get('/beranda', function () {
    return view('beranda');
});

//kuisioner pendahuluan
Route::get('/KuisionerPendahuluan', function () {
    return view('KuisionerAlumniPendahuluan');
});

//kuisioner utama
Route::get('/KuisionerUtama', function () {
    return view('KuisionerAlumniUtama');
});

//buat berita
Route::get('/buatBerita', function () {
    return view('buatBerita');
});

//berita
Route::get('/berita', function () {
    return view('berita');
});

//berita
Route::get('/halamanBerita', function () {
    return view('halamanBerita');
});




