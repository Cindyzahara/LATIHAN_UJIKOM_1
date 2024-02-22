<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\LoginController;
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

// Route::get('/', function () {
//     return view('_template_back.layout');
// });

Route::Resource('pengguna', PenggunaController::class);
Route::get('/',[LoginController::class, 'login'])->name('login'); // ROUTE LOGIN
Route::post('/auth', [LoginController::class, 'auth'])->name('auth'); // ROUTE UNTUK PROSES LOGIN
Route::get('/registrasi', [LoginController::class, 'registrasi'])->name('registrasi'); // ROUTE REGISTRASI
Route::post('registrasi/auth', [LoginController::class, 'auth_regis'])->name('auth_regis'); // ROUTE PROSES REGISTRASI
Route::get('/logout',[LoginController::class, 'logout'])->name('logout'); // ROUTE LOGOUT