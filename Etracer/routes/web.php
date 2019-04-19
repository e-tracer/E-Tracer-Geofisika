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
Route::get('/profile', function () {
    return view('profile');
});



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

//formElement
Route::get('/formElement', function () {
    return view('mimin/formElement');
});

//formTable
Route::get('/formTable', function () {
    return view('mimin/formTable');
});

//studyTable
Route::get('/studyTable', function () {
    return view('mimin/studyTable');
});

//kuisionerPerusahaan
Route::get('/kuisionerPerusahaan', function () {
    return view('kuisionerPerusahaan');
});

//beranda_loginGagal
Route::get('/loginGagal', function () {
    return view('beranda_loginGagal');
});















