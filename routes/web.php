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


Route::get('admin-register','CustomAuthController@showRegisterForm')->name('admin.register');
Route::post('admin-register','CustomAuthController@register');


Route::get('admin-login','CustomAuthController@showLoginForm')->name('admin.login');
Route::post('admin-login','CustomAuthController@login');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
