<?php

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



// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('admin/home', [HomeController::class, 'adminhome'])->name('admin.home')->middleware('is_admin');
// Route::get('/welcome', [App\Http\Controllers\WelcomeController::class, 'index'])->name('welcome');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('welcome', WelcomeController::class);
Route::get('/', [App\Http\Controllers\WelcomeController::class, 'index'])->name('index');
Route::get('/welcome', [App\Http\Controllers\WelcomeController::class, 'index'])->name('index');
Route::get('/bukumedia', [App\Http\Controllers\WelcomeController::class, 'bukumedia'])->name('bukumedia');
Route::get('/profil', [App\Http\Controllers\WelcomeController::class, 'profil'])->name('profil');
Route::get('/pengunjung', [App\Http\Controllers\WelcomeController::class, 'pengunjung'])->name('pengunjung');

Route::get('/bukusearch', ['uses' => 'WelcomeController@bukusearch', 'as' => 'welcome.bukusearch']);

Route::resource('bukutamu', BukuTamuController::class)->middleware('is_admin');

Route::resource('admin', AdminController::class)->middleware('is_admin');
Route::get('/admprofil', [App\Http\Controllers\AdminController::class, 'profil'])->name('profil')->middleware('is_admin');

Route::resource('buku', BukuController::class)->middleware('is_admin');

Route::resource('anggota', AnggotaController::class)->middleware('is_admin');

Route::resource('transaksi', TransaksiController::class)->middleware('is_admin');

Route::resource('laporan', LaporanController::class)->middleware('is_admin');

Route::resource('credits', WelcomeController::class);

Auth::routes([
    'register' => false // Register Routes...
]);
