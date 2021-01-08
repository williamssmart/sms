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

Route::get('/admin', 'Admin\DashboardController@index');

Route::get('/admin/students','Admin\DashboardController@student');

Route::get('/admin/reset-password', 'Admin\DashboardController@resetpassword');
Route::post('/admin/reset-password', 'Admin\DashboardController@storepassword');
//Route::post('/admin/reset-password', 'Admin\DashboardController@storepassword');

Route::get('/admin/message-inbox', function (){
  return view('admin/composer');
});

Route::get('/admin/register-student', function (){
  return view('admin/ui');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
