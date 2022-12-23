<?php

use App\Http\Controllers\adminController;
use App\Http\Controllers\jurusanController;
use App\Http\Controllers\kelasController;
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

Route::get('/admin/detail/{id}',[adminController::class, 'detail']);

Route::post('/admin/store',[adminController::class, 'store']);

Route::get('/admin/{id}/update',[adminController::class, 'updateview']);

Route::put('/admin/{id}',[adminController::class, 'update']);

Route::delete('/admin/{id}',[adminController::class, 'destroy']);

// end admin 

// siswa route 

Route::get('/siswa', function(){
    return view('siswa.siswa');
});

// end siswa 

// Route kelas 

Route::get('/kelas', [kelasController::class, 'index']);

Route::get('/kelas/create', [kelasController::class, 'createview']);

Route::post('/kelas/store', [kelasController::class, 'store']);

// End kelas 


Route::get('/transaksi', function(){
    return view('transaksi.transaksi');
});

// Jurusan Route 

Route::get('/jurusan', [jurusanController::class, 'index']);

Route::get('/jurusan/create', [jurusanController::class, 'create']);

Route::get('/jurusan/{id}/edit', [jurusanController::class, 'updateview']);

Route::post('/jurusan/store', [jurusanController::class, 'store']);

Route::put('/jurusan/{id}', [jurusanController::class, 'update']);

Route::delete('/jurusan/{id}', [jurusanController::class, 'destroy']);

Route::get('/jurusan/detail/{id}', [jurusanController::class, 'detail']);

// End Jurusan 

