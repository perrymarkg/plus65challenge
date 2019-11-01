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

Route::get('/admin/login', 'Admin\LoginController@showLoginForm')->name('admin.login.form');
Route::post('/admin/login', 'Admin\LoginController@login')->name('admin.do.login');


Route::group(['prefix' => 'admin'], function() {
    Route::resource('/', 'Admin\DashboardController');
});