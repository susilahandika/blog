<?php

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('produk', 'ProdukController');
Route::get('produk/{produk}', 'ProdukController@destroy')->name('produk.destroy');

Route::resource('kategori', 'KategoriController');
Route::get('kategori/{kategori}', 'KategoriController@destroy')->name('kategori.destroy');

Route::resource('plg', 'PelangganController');
Route::get('plg/{plg}', 'PelangganController@destroy')->name('plg.destroy');