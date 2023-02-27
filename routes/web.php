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

Route::get('/landing', 'MasyarakatController@landing')->name('masyarakat.landing');
Route::get('/register', 'Auth\\RegisterController@RegisterFormMasyarakat');
Route::post('/register/store', 'Auth\\RegisterController@RegisterMasyarakat')->name('masyarakat.register');

Route::get('login', 'Auth\\LoginController@FormLoginMasyarakat');
Route::post('login/post', 'Auth\\LoginController@LoginMasyarakat')->name('masyarakat.login');

Route::middleware('masyarakat')->group(function() {

    // pengaduan
    Route::get('/pengaduan', 'PengaduanController@index')->name('pengaduan');
    Route::get('/pengaduan/create', 'PengaduanController@create');
    Route::post('/pengaduan/store', 'PengaduanController@store');
    Route::get('/pengaduan/edit/{id}', 'PengaduanController@edit');
    Route::put('/pengaduan/update/{id}', 'PengaduanController@update');
    Route::get('/pengaduan/show/{id}', 'PengaduanController@show');
    Route::get('/pengaduan/delete/{id}', 'PengaduanController@delete');

    // tanggapan
    Route::get('/tanggapan', 'TanggapanController@index')->name('tanggapan');
    Route::get('/tanggapan/create', 'TanggapanController@create');
    Route::post('/tanggapan/store', 'TanggapanController@store');
    Route::get('/tanggapan/edit/{id}', 'TanggapanController@edit');
    Route::put('/tanggapan/update/{id}', 'TanggapanController@update');
    Route::get('/tanggapan/delete/{id}', 'TanggapanController@delete');
});