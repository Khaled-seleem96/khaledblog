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
    return view('user.index');
});
Route::get('/about', function () {
    return view('user.about');
});
Route::get('/gallery', function () {
    return view('user.gallery');
});
Route::get('/userlogin','Login\LoginController@index')->name('userlogin');
Route::get('/reg','Login\RegController@index')->name('reg');
Route::post('/regg','Login\RegController@create')->name('regg');


Auth::routes();
Route::get('/admin/content/index','adminController@index')->name('content');
Route::post('/admin/content/insert','adminController@store')->name('insert');
Route::get('/admin/content/insert','adminController@create')->name('upload');
Route::get('/delete/{id}','adminController@destroy');
Route::get('/edit/{id}','adminController@edit')->name('edit');
Route::post('/update/{id}','adminController@update')->name('update');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin/order/index','adminController@order')->name('order');
