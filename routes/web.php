<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\KibController;
use App\Http\Controllers\RuanganController;
use App\Http\Controllers\AsetController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\PeminjamanController;
use App\Http\Controllers\Account\PasswordController;
use Illuminate\Support\Facades\Auth;

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

Auth::routes();

Route::group(['middleware' => ['auth', 'level:admin,pegawai']], function () {

    Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('/');
});

Route::get('/home', 'HomeController@index');

//user
/*
Route::get('/user', [App\Http\Controllers\UserController::class, 'index'])->name('user');
Route::get('/user/create', [App\Http\Controllers\UserController::class, 'create'])->name('user');
Route::post('/user', [App\Http\Controllers\UserController::class, 'store'])->name('user');*/
Route::resource('/user', UserController::class);

//anggota
Route::get('/anggota', [App\Http\Controllers\AnggotaController::class, 'index'])->name('anggota');

//kib
Route::get('/kib/kiba', [App\Http\Controllers\KibController::class, 'kiba'])->name('kib');
Route::get('/kib/kibb', [App\Http\Controllers\KibController::class, 'kibb'])->name('kib');
Route::get('/kib/kibc', [App\Http\Controllers\KibController::class, 'kibc'])->name('kib');
Route::get('/kib/kibd', [App\Http\Controllers\KibController::class, 'kibd'])->name('kib');
Route::get('/kib/kibe', [App\Http\Controllers\KibController::class, 'kibe'])->name('kib');
Route::get('/kib/kibf', [App\Http\Controllers\KibController::class, 'kibf'])->name('kib');

//aset
/*
Route::get('/aset', [App\Http\Controllers\AsetController::class, 'index'])->name('aset');
Route::get('/aset/create', [App\Http\Controllers\AsetController::class, 'create'])->name('aset');
Route::post('/aset', [App\Http\Controllers\AsetController::class, 'store'])->name('aset');
Route::get('/aset/edit', [App\Http\Controllers\AsetController::class, 'edit'])->name('aset');
Route::get('/aset/hapus/{id}', [App\Http\Controllers\AsetController::class, 'destroy'])->name('aset');
Route::get('/aset/detail/{aset}', [App\Http\Controllers\AsetController::class, 'detail'])->name('aset');
*/
Route::resource('/aset', AsetController::class);

//ruangan
/*
Route::get('/ruangan', [App\Http\Controllers\RuanganController::class, 'index'])->name('ruangan');
Route::get('/ruangan/create', [App\Http\Controllers\RuanganController::class, 'create'])->name('ruangan');
Route::post('/ruangan/store', [App\Http\Controllers\RuanganController::class, 'store'])->name('ruangan');
Route::get('/ruangan/edit/{ruangan}', [App\Http\Controllers\RuanganController::class, 'edit'])->name('ruangan');
Route::get('/ruangan/{ruangan}', [App\Http\Controllers\RuanganController::class, 'show'])->name('ruangan');
*/
//Route::post('/import', [App\Http\Controllers\RuanganController::class, 'import'])->name('ruangan');
Route::get('/export', [App\Http\Controllers\RuanganController::class, 'export']);
Route::resource('/ruangan', RuanganController::class);

//laporan
Route::resource('/laporan', LaporanController::class);

//transaksi 
Route::get('/exportExcel', [App\Http\Controllers\PeminjamanController::class, 'exportExcel']);
Route::get('/exportPDF', [App\Http\Controllers\PeminjamanController::class, 'exportPDF']);
Route::resource('/peminjaman', PeminjamanController::class);

Route::get('account/password', [App\Http\Controllers\Account\PasswordController::class, 'edit'])->name('password.edit');
Route::patch('account/password', [App\Http\Controllers\Account\PasswordController::class, 'update'])->name('password.edit');
