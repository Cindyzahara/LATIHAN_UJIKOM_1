<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PeminjamController;
use App\Http\Controllers\PenggunaController;

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
    return view('_template_back.layout');
});

Route::Resource('pengguna', PenggunaController::class);
Route::Resource('peminjam', PeminjamController::class);
Route::post('/peminjaman/create', [PeminjamController::class, 'store'])->name('peminjam.create');
Route::get('/peminjaman/input', [PeminjamController::class, 'input'])->name('peminjam.input');

