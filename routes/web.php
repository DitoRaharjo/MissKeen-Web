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

/* ---------------- FrontEnd Routes -----------------  */
// Login - Logout
Route::get('login', 'Backend\UserController@login')->name('user.login');
Route::post('auth/login', 'Backend\UserController@doLogin')->name('user.auth.login');
Route::get('logout', 'Backend\UserController@doLogout')->name('user.logout');

//Register
Route::get('register', 'Backend\UserController@register')->name('user.register');
Route::post('register', 'Backend\UserController@doRegister')->name('user.do.register');

//Ganti Password - Lupa Password
Route::post('GantiPass-do', 'Backend\UserController@gantiPassDo')->name('GantiPass.do');

//Dashboard
Route::group(['middleware'=>'checkUser', 'auth'], function() {
  Route::get('dashboard-administrator', 'Backend\UserController@dashboardAdministrator')->name('dashboard.administrator');
  Route::get('dashboard-developer', 'Backend\UserController@dashboardDeveloper')->name('dashboard.developer');
});

//Pengelolaan Application
Route::group(['middleware'=>'checkUser', 'auth'], function() {
  Route::get('aplikasi-index', 'backend\ApplicationController@index')->name('back.aplikasi.index');
  Route::get('aplikasi-create', 'backend\ApplicationController@create')->name('back.aplikasi.create');
  Route::post('aplikasi-store', 'backend\ApplicationController@store')->name('back.aplikasi.store');
  Route::get('aplikasi-edit/{id}', 'backend\ApplicationController@edit')->name('back.aplikasi.edit');
  Route::patch('aplikasi-update/{id}', 'backend\ApplicationController@update')->name('back.aplikasi.update');
  Route::get('aplikasi-delete/{id}', 'backend\ApplicationController@destroy')->name('back.aplikasi.destroy');
});
