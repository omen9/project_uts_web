<?php

use Illuminate\Support\Facades\Route;
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

Route::get('/', [LoginController::class, 'index'])->name('index');
Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/login/checking', [LoginController::class, 'loginChecking']);
Route::get('/register', [LoginController::class, 'register']);
Route::get('/about', [LoginController::class, 'about']);
Route::get('/product', [LoginController::class, 'product'])->name('articles');
Route::get('/article/{id}', [LoginController::class, 'article']);
Route::get('/admin', [LoginController::class, 'admin'])->name('admin');
Route::get('/akun', [LoginController::class, 'akun'])->name('akun');
Route::get('/barang', [LoginController::class, 'barang'])->name('barang');
Route::get('/transaksi', [LoginController::class, 'transaksi'])->name('transaksi');
Route::get('/barang/add', [LoginController::class, 'addBarang']);
Route::get('/barang/edit/{id}', [LoginController::class, 'editBarang']);


Route::post('/register/create', [LoginController::class, 'registerCreate']);
Route::get('/akun/delete/{id}', [LoginController::class, 'deleteAkun']);
Route::post('/barang/insert', [LoginController::class, 'addBuku']);
Route::get('/barang/delete/{id}', [LoginController::class, 'deleteBuku']);
Route::post('/barang/update/{id}', [LoginController::class, 'updateBuku']);
Route::post('/barang/checkout', [LoginController::class, 'checkout']);


