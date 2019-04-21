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
Route::get('/beranda','EtracerController@beranda');
Route::get('/beranda/proses','EtracerController@proses');

//beranda_login
Route::get('/berandaLogin', 'EtracerController@login');

//kuisioner pendahuluan
Route::get('/KuisionerPendahuluan', 'EtracerController@pendahuluan');
Route::get('/KuisionerPendahuluan/simpanPendahuluan','EtracerController@simpanPendahuluan');

//kuisioner utama
Route::get('/KuisionerUtama', 'EtracerController@utama');
Route::get('/KuisionerUtama/simpanUtama', 'EtracerController@simpanUtama');

//buat berita
Route::get('/buatBerita', 'EtracerController@buatBerita');
Route::post('/buatBerita/simpanData', 'EtracerController@simpanData');

//berita
Route::get('/berita', 'EtracerController@berita');

//halaman berita
Route::get('/halamanBerita/{id}', 'EtracerController@halaman');

//profile
Route::get('/profile', 'EtracerController@profile');
Route::post('/profile/dataProfile', 'EtracerController@dataProfile');

//berita_unlogin
Route::get('/beritaUnlogin', 'EtracerController@beritaUnlogin');
Route::get('/halamanBerita2/{id}', 'EtracerController@halaman2');

//halamanBerita_unlogin
Route::get('/halamanBeritaUnlogin', function () {
    return view('halamanBerita_unlogin');
});

//admin
Route::get('/admin', function () {
    return view('mimin/admin');
});

//homeAdmin
Route::get('/homeAdmin', function () {
    return view('mimin/homeAdmin');
});

//barCharts
Route::get('/barCharts', function () {
    return view('mimin/barCharts');
});

//formElement : home
Route::get('/formElement', 'EtracerController@formElement');
Route::get('/mimin/formElement', 'EtracerController@formElement');
Route::post('/formElement/adminProses', 'EtracerController@adminProses');
Route::post('/formElement/alumniProses', 'EtracerController@alumniProses');
Route::get('/hapusAdmin/{id}','EtracerController@hapusAdmin' );
Route::get('/hapusAlumni/{id}', 'EtracerController@hapusAlumni');
Route::get('/hapusBerita/{id}', 'EtracerController@hapusBerita');


//formTable : kuisioner
Route::get('/formTable', 'EtracerController@formTable');
Route::get('/formTable/mencari', 'EtracerController@mencari');
Route::get('/formTable/cari/{id}', 'EtracerController@cari');
Route::get('/downloadForm', 'EtracerController@downloadForm');

//studyTable : buat berita
Route::get('/studyTable', 'EtracerController@studyTable');
Route::post('/studyTable/simpanBerita', 'EtracerController@simpanBerita');


//kuisionerPerusahaan
Route::get('/kuisionerPerusahaan', 'EtracerController@kuisionerPerusahaan');
Route::get('/kuisionerPerusahaan/simpanPerusahaan', 'EtracerController@simpanPerusahaan');

//beranda_loginGagal
Route::get('/loginGagal', function () {
    return view('beranda_loginGagal');
});

//unduh
Route::get('/unduh', function () {
    return view('mimin/unduhPendahuluan');
});















