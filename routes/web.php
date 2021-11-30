<?php

use Illuminate\Support\Facades\Auth;
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
//     return view('landingpage.home');
// });

// Route::get('/', '')

// Route::get('/', 'HomeController@index')->name('home');
Route::get('/', 'DashboardController@index')->name('user.dashboard');
Route::get('tentangkami', 'TentangKamiController@index')->name('user.tentangkami');
Route::get('layanan', 'LayananController@index')->name('user.layanan');
// Route::view('tentangkami', 'landingpage.tentangkami');
// Route::view('layanan', 'landingpage.layanan');
Route::resource('kontak', 'KontakController', [
    'as' => 'user'
]);
// Route::view('kontak', 'landingpage.kontak');
// Route::get('lokasi', 'LokasiController@index')->name('lokasi');

//Admin
Route::prefix('admin')
    ->namespace('Admin')
    ->group(function(){
        Route::get('/', 'DashboardController@index')->name('dashboard');
        Route::resource('lokasi', 'LokasiController', [
            'as' => 'admin'
        ]);
        Route::resource('produk', 'ProdukController', [
            'as' => 'admin'
        ]);
        Route::resource('kontak', 'KontakController', [
            'as' => 'admin'
        ]);
    });


Auth::routes();
