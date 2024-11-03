<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\DataPegawaiController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/',  [Controller::class, 'index'])->name('home');

Route::get('/login',  [LoginController::class, 'login'])->name('layout.login');

Route::post('/proses-login',  [LoginController::class, 'authentivikasi']);

Route::group(['middleware'=>'auth'], function(){

    Route::get('/home',  [LoginController::class, 'index'])->name('admin.dashboard');
    
    Route::get('/DataPegawai',  [DataPegawaiController::class, 'index'])->name('admin.pegawai.DataPegawai');
    
    Route::get('/TambahData',  [DataPegawaiController::class, 'create'])->name('admin.pegawai.tambah');
    
    
    Route::post('/inputdata',  [DataPegawaiController::class, 'store'])->name('inputdata');
    
    Route::get('/editdata/{id}',  [DataPegawaiController::class, 'edit'])->name('editdata');
    
    Route::put('/updatedata/{id}',  [DataPegawaiController::class, 'update'])->name('updatedata');
    
    Route::delete('/deletedata',  [DataPegawaiController::class, 'destroy'])->name('deletedata');

});

Route::post('/logout',  [LoginController::class, 'logout'])->name('logout');




