<?php

use App\Http\Controllers\AbsenController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\JurusanController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\QrController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\TugasController;
use App\Http\Controllers\UsersController;
use App\Models\coment;
use App\Models\post;
use App\Models\Siswa;
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
    return view('auth.login');
});
Route::get('/scan', function () {
    return view('dashboard.absen.scan');
})->name('scan');



Auth::routes();
// Route::post('/logout/user', [LoginController::class, 'logout'])->name('lgt');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::post('/edit/absen', [App\Http\Controllers\AbsenController::class, 'absenQr'])->name('QrcodeScan');

Route::get('/edit/absen/perkelas', [App\Http\Controllers\AbsenController::class, 'perkelas'])->name('perkelas');
Route::get('/dataAbsen/perkelas/{id_K}/{id_J}', [App\Http\Controllers\AbsenController::class, 'edit']);
Route::get('/user/serach', [App\Http\Controllers\UsersController::class, 'search'])->name('search');


// users
Route::resource('/user/profile', UsersController::class);
Route::resource('/user', UsersController::class);
Route::resource('/user/tugas', TugasController::class);
Route::resource('/jurusan', JurusanController::class);
Route::resource('/kelas', KelasController::class);
Route::resource('/siswa', SiswaController::class);
Route::resource('/absen', AbsenController::class);
Route::resource('/qr', QrController::class);
