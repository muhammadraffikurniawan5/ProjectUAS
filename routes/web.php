<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardUserController;
use App\Http\Controllers\KategoriProdukController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\PesananController;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', function () {
    return view('welcome.welcome');
});

Route::group(['middleware' => ['auth', 'peran:admin-manager']], function () {
    Route::prefix('manage')->group(function () {
        Route::get('/dashboard', [DashboardController::class, 'index']);
        Route::get('/logout', [DashboardController::class, 'logout']);

        Route::get('/kategoriProduk', [KategoriProdukController::class, 'index']);
        Route::get('/kategoriProduk/create', [KategoriProdukController::class, 'create']);
        Route::post('/kategoriProduk/store', [KategoriProdukController::class, 'store']);
        Route::get('/kategoriProduk/edit/{id}', [KategoriProdukController::class, 'edit']);
        Route::post('/kategoriProduk/update/{id}', [KategoriProdukController::class, 'update']);
        Route::get('/kategoriProduk/delete/{id}', [KategoriProdukController::class, 'destroy']);

        Route::get('/produk', [ProdukController::class, 'index']);
        Route::get('/produk/create', [ProdukController::class, 'create']);
        Route::post('/produk/store', [ProdukController::class, 'store']);
        Route::get('/produk/edit/{id}', [ProdukController::class, 'edit']);
        Route::post('/produk/update/{id}', [ProdukController::class, 'update']);
        Route::get('/produk/delete/{id}', [ProdukController::class, 'destroy']);

        Route::get('/pesanan', [PesananController::class, 'index']);
        Route::get('/pesanan/create', [PesananController::class, 'create']);
        Route::post('/pesanan/store', [PesananController::class, 'store']);
        Route::get('/pesanan/edit/{id}', [PesananController::class, 'edit']);
        Route::post('/pesanan/update/{id}', [PesananController::class, 'update']);
        Route::get('/pesanan/delete/{id}', [PesananController::class, 'destroy']);
    });
});

Route::prefix('user')->group(function () {
    Route::get('/dashboard', [DashboardUserController::class, 'index']);
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
