<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ControllerMahasiswa;

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
    return view('index');
});

// Admin Menu

Route::get('home_admin', [AdminController::class, "show_home"]);
Route::get('admin_datauser', [AdminController::class, "show_dataUser"]);
Route::get('admin_tambahSoal', [AdminController::class, "show_tambahSoal"]);
Route::get('admin_dataSoal', [AdminController::class, "show_dataSoal"]);

Route::post('add_pertanyaan', [AdminController::class, "add_pertanyaan"]);

// mahasiswa menu
Route::get('home_mahasiswa', [ControllerMahasiswa::class, "show_home"]);
Route::get('mahasiswa_ujian', [ControllerMahasiswa::class, "show_ujian"]);
Route::post('hasil_ujian', [ControllerMahasiswa::class, "hasil_ujian"]);
