<?php

use Illuminate\Support\Facades\Route;
use App\lowongan;
use App\admin;
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

Route::get('/', function () {
    $data = lowongan::all();
    return view('welcome', ['lowongan' => $data]);
});

Route::group(['middleware' => ['auth']], function(){
    Route::get('/lowongan', 'LowonganController@index')->name('lowongan');
    Route::post('/lowongan/add', 'LowonganController@add')->name('lowonganAdd');
    Route::get('/lowongan/delete/{id}', 'LowonganController@delete');
    Route::get('/lowongan/edit/{id}', 'LowonganController@edit');
    Route::post('/lowongan/update', 'LowonganController@update');

    Route::get('/list', 'ListController@index')->name('list');
    Route::get('/detail-job/{id}', 'DetailJobController@index')->name('detail-job');

    Route::get('/profile/edit', 'ProfileController@edit')->name('edit-profile');
    Route::post('/profile/store', 'ProfileController@store')->name('profileStore');
    Route::get('/profile', 'ProfileController@index')->name('profile');
});

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin', 'AdminController@index')->name('admin');
// Bagian multiple authentication
Route::get('admin-login', 'Auth\AdminLoginController@showLoginForm');
Route::post('admin-login', ['as' => 'admin-login', 'uses' => 'Auth\AdminLoginController@login']);
Route::get('admin-register', 'Auth\AdminLoginController@showRegisterPage');
Route::post('admin-register', 'Auth\AdminLoginController@register')->name('admin.register');

Route::get('/tentang', 'TentangController@index')->name('tentang');


