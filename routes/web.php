<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\UsersController;
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
//     return view('landing');
// });

Route::get('/users', [UsersController::class, 'index']);
Route::get('/', [LandingController::class, 'index']);
Route::get('/dashboard', [DashboardController::class, 'index']);
Route::get('/kategori', [ProdukController::class, 'kategori']);
Route::get('/dfproduk', [ProdukController::class, 'daftar']);
Route::get('/dfproduk-create', [ProdukController::class, 'create_produk']);
Route::post('/dfproduk-store', [ProdukController::class, 'store_produk']);
Route::get('/dfproduk-edit-{id}', [ProdukController::class, 'edit_produk']);
Route::put('/dfproduk-update', [ProdukController::class, 'update_produk']);
Route::get('/dfproduk-del-{id}', [ProdukController::class, 'del_produk']);
Route::get('/grpengguna', [PenggunaController::class, 'grup']);
Route::get('/dfpengguna', [PenggunaController::class, 'daftar']);
