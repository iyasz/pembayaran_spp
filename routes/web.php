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

Route::get('/', function () {
    return view('dashboard');
});

Route::get('admin/', function(){
    return view('admin.admin');
});

Route::get('admin/create', function(){
    return view('admin.createadmin');
});



Route::get('siswa/', function(){
    return view('siswa.siswa');
});

Route::get('kelas/', function(){
    return view('kelas.kelas');
});

Route::get('transaksi/', function(){
    return view('transaksi.transaksi');
});

Route::get('jurusan/', function(){
    return view('jurusan.jurusan');
});


