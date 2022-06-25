<?php

use App\Http\Controllers\AbsenController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\JurusanController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\QrController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\TugasController;
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Auth;
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
    return view('welcome');
});
Route::get('/scan', function () {
    return view('dashboard.absen.scan');
})->name('scan');

Route::get('/dasboard', function () {
    return view('dashboard.main');
})->name('dashboard');

Auth::routes();
// Route::post('/logout/user', [LoginController::class, 'logout'])->name('lgt');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/edit/absen', [App\Http\Controllers\AbsenController::class, 'edit']);

// users
Route::resource('/user/profile', UsersController::class);
Route::resource('/user/tugas', TugasController::class);
Route::resource('/jurusan', JurusanController::class);
Route::resource('/kelas', KelasController::class);
Route::resource('/siswa', SiswaController::class);
Route::resource('/absen', AbsenController::class);
Route::resource('/qr', QrController::class);
