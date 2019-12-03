<?php

use Illuminate\Support\Facades\Route;
use App\lowongan;
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
});

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin', 'AdminController@index')->name('admin');
Route::get('/tentang', 'TentangController@index')->name('tentang');


