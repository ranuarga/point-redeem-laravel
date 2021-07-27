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

Route::get('/', 'HomeController@index');
Route::get('/home', 'HomeController@index')->name('home');

Route::get('login', 'LoginController@showLoginForm')->name('login');
Route::post('login', 'LoginController@login')->name('login.post');
Route::get('register', 'RegisterController@index')->name('register');
Route::post('register', 'RegisterController@store')->name('register.post');
Route::get('logout', 'LoginController@logout')->name('logout');

Route::get('admin/login', 'LoginController@showAdminLoginForm')->name('admin.login');
Route::post('admin/login', 'LoginController@adminLogin')->name('admin.login.post');

Route::prefix('admin')->middleware('auth:admin')->group(function(){
    Route::get('logout', 'LoginController@adminLogout')->name('admin.logout');
    Route::get('dashboard', 'DashboardController@index')->name('dashboard');
});