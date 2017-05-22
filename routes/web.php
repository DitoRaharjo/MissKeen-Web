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
    return view('home');
})->name('home');

Route::get('api-documentation', function () {
    return view('apidoc');
})->name('api.doc');

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
  Route::get('aplikasi-index', 'Backend\ApplicationController@index')->name('back.aplikasi.index');
  Route::get('aplikasi-create', 'Backend\ApplicationController@create')->name('back.aplikasi.create');
  Route::post('aplikasi-store', 'Backend\ApplicationController@store')->name('back.aplikasi.store');
  Route::get('aplikasi-edit/{id}', 'Backend\ApplicationController@edit')->name('back.aplikasi.edit');
  Route::patch('aplikasi-update/{id}', 'Backend\ApplicationController@update')->name('back.aplikasi.update');
  Route::get('aplikasi-delete/{id}', 'Backend\ApplicationController@destroy')->name('back.aplikasi.destroy');

  Route::get('aplikasi-updateApiKey/{id}', 'Backend\ApplicationController@updateApiKey')->name('back.aplikasi.updateApiKey');
  Route::patch('aplikasi-updatefoto/{id}', 'Backend\ApplicationController@updateFoto')->name('back.aplikasi.updatefoto');

  Route::get('aplikasi-live/{id}', 'Backend\ApplicationController@updateLive')->name('back.aplikasi.live');
  Route::get('aplikasi-development/{id}', 'Backend\ApplicationController@updateDevelopment')->name('back.aplikasi.development');
});

//Pengelolaan Application Internal Administrator
Route::group(['middleware'=>'checkUser', 'auth'], function() {
  Route::get('aplikasiAdmin-index', 'Backend\AdminApplicationController@index')->name('back.aplikasiAdmin.index');
  Route::get('aplikasiAdmin-create', 'Backend\AdminApplicationController@create')->name('back.aplikasiAdmin.create');
  Route::post('aplikasiAdmin-store', 'Backend\AdminApplicationController@store')->name('back.aplikasiAdmin.store');
  Route::get('aplikasiAdmin-edit/{id}', 'Backend\AdminApplicationController@edit')->name('back.aplikasiAdmin.edit');
  Route::patch('aplikasiAdmin-update/{id}', 'Backend\AdminApplicationController@update')->name('back.aplikasiAdmin.update');
  Route::get('aplikasiAdmin-delete/{id}', 'Backend\AdminApplicationController@destroy')->name('back.aplikasiAdmin.destroy');

  Route::get('aplikasiAdmin-updateApiKey/{id}', 'Backend\AdminApplicationController@updateApiKey')->name('back.aplikasiAdmin.updateApiKey');
  Route::patch('aplikasiAdmin-updatefoto/{id}', 'Backend\AdminApplicationController@updateFoto')->name('back.aplikasiAdmin.updatefoto');

  Route::get('aplikasiAdmin-live/{id}', 'Backend\AdminApplicationController@updateLive')->name('back.aplikasiAdmin.live');
  Route::get('aplikasiAdmin-development/{id}', 'Backend\AdminApplicationController@updateDevelopment')->name('back.aplikasiAdmin.development');
});
