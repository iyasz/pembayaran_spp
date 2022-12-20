<?php

use App\Http\Controllers\adminController;
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

// admin route 

Route::get('/admin',[adminController::class, 'index'] );

Route::get('/admin/create',[adminController::class, 'create']);

Route::get('/admin/detail',[adminController::class, 'detail']);

Route::post('/admin/store',[adminController::class, 'store']);

// end admin 

// siswa route 

Route::get('siswa/', function(){
    return view('siswa.siswa');
});

// end siswa 

Route::get('kelas/', function(){
    return view('kelas.kelas');
});

Route::get('transaksi/', function(){
    return view('transaksi.transaksi');
});

Route::get('jurusan/', function(){
    return view('jurusan.jurusan');
});


