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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/datamotor', function () {
    return view('admin/motor');
});

Route::get('/tambahdatamotor', function () {
    return view('admin/tambahmotor');
});

Route::get('/datapelanggan', function () {
    return view('admin/pelanggan');
});
Route::get('/datasparepart', function () {
    return view('admin/sparepart');
});
Route::get('/datadistributor', function () {
    return view('admin/distributor');
});
Route::get('/datamekanik', function () {
    return view('admin/mekanik');
});
Route::get('/dataservis', function () {
    return view('admin/jenisservis');
});
Route::get('/laporankeuangan', function () {
    return view('admin/keuangan');
});
Route::get('/notatransaksi', function () {
    return view('admin/nota');
});
Route::get('/laporantransaksi', function () {
    return view('admin/laptransaksi');
});

Route::get('/pilihservis', function () {
    return view('pilihjenis');
});