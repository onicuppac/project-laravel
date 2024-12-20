<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\SiswaController;
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

Route::get('/beranda', [HomeController::class, 'index']);
Route::get('/tentang', [HomeController::class, 'tentang']);
Route::get('/kontak', [HomeController::class, 'kontak']);
Route::get('/siswa', [SiswaController::class, 'index']);
Route::match(['get', 'post'], '/siswa/insert', [SiswaController::class, 'insert']);
Route::match(['get', 'post'], '/siswa/ubah/{id}', [SiswaController::class, 'ubah']);
Route::match(['get', 'post'], '/siswa/hapus/{id}', [SiswaController::class, 'hapus']);
Route::get('admin', function(){
    return view('tema');
});
Route::get('/', [SessionController::class, 'index']);
Route::post('/sesi/login', [SessionController::class, 'login']);
Route::get('/sesi/logout', [SessionController::class, 'logout']);