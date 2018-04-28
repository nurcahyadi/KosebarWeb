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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Route::post('/register', 'HomeController@store')->name('auth.register');
// Route::post('/login', 'HomeController@store')->name('auth.login');
// Route::get('/login', 'HomeController@index')->name('auth.login');
Route::get('/item','ItemController@index')->name('admin.tampilanadmin');
Route::get('/admin','AdminController@index')->name('admin.adminbenerantampilan');
// Route::get('/create', 'ItemController@create')->name('item.create');
// Route::post('/create', 'ItemController@store')->name('item.store');
Route::resource('item','ItemController');
Route::resource('profile','ProfileController');
Route::resource('profileadmin','ProfileadminController');
Route::resource('admin','AdminController');
Route::resource('transaksi','TransaksiController');
// Route::post('/', 'Auth\LoginController@login')->middleware('dashboard');
Route::get('/','DashboardController@index')->name('dashboard');
// Route::get('get-profile/{profile}','ProfileController@show');
