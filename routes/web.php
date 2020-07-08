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

Route::get('/', 'HomeController@beranda');

Auth::routes();

Route::get('/home', 'ProdukController@index');
Route::get('create/produk', 'ProdukController@create');
Route::post('create/produk', 'ProdukController@store');
Route::get('/produk/detail/{produk}', 'ProdukController@show');
Route::post('/produk/keranjang/{id}', 'ProdukController@keranjang');
Route::get('/checkout', 'ProdukController@checkout');
Route::get('/checkout/hapus/{id}', 'ProdukController@kurangi');
Route::get('/konfirmasi', 'ProdukController@konfirmasi');



