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
    return view('homepage');
});




Route::get('/formulirpendaftaran','FrontendController@create')->name('formulirpendaftaran.create');
Route::post('/formulirpendaftaran','FrontendController@store')->name('formulirpendaftaran.store');

Auth::routes();



Route::get('/rekapnilai', function () {
    return view('rekapnilai');
});





Route::group(['prefix' => 'pendaftaran'],function (){
    Route::get('/','PendaftaranController@index')->name('pendaftaran');
    Route::get('/edit/{id}','PendaftaranController@edit')->name('pendaftaran.edit');
    Route::patch('/edit/{id}','PendaftaranController@update')->name('pendaftaran.update');
    Route::delete('/hapus/{id}','PendaftaranController@destroy')->name('pendaftaran.destroy');

});

Route::get('/home', 'HomeController@index')->name('home');
