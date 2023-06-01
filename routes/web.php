<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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
Route::fallback(function() {
    return view('error');
});
Route::get('/dashboard', [DashboardController::class, 'index']);
Route::get('/kategori', [ProdukController::class, 'kategori']);
Route::get('/dfproduk', [ProdukController::class, 'daftar']);
Route::get('/dfproduk-create', [ProdukController::class, 'create_produk']);
Route::post('/dfproduk-store', [ProdukController::class, 'store_produk']);
Route::get('/dfproduk-edit-{id}', [ProdukController::class, 'edit_produk']);
Route::put('/dfproduk-update', [ProdukController::class, 'update_produk']);
Route::get('/dfproduk-del-{id}', [ProdukController::class, 'del_produk']);
Route::get('/kategori-create', [ProdukController::class, 'create_kategori']);
Route::post('/kategori-store', [ProdukController::class, 'store_kategori']);
Route::get('/kategori-edit-{id}', [ProdukController::class, 'edit_kategori']);
Route::put('/kategori-update', [ProdukController::class, 'update_kategori']);
Route::get('/kategori-del-{id}', [ProdukController::class, 'del_kategori']);

Route::get('/grpengguna', [PenggunaController::class, 'grup']);
Route::get('/dfpengguna', [PenggunaController::class, 'daftar']);
Route::get('/dfpengguna-create', [PenggunaController::class, 'create_pengguna']);
Route::post('/dfpengguna-store', [PenggunaController::class, 'store_pengguna']);


Route::get('/login', [LoginController::class, 'index']);
Route::post('/login-proses', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);