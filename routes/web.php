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

Route::get('admin/add-user', 'Admin\UserManagementController@addUsers');
Route::post('admin/add-user', 'Admin\UserManagementController@storeUsers');
Route::get('admin/users', 'Admin\UserManagementController@listUsers');

Route::get('admin/register-student', 'Admin\UserManagementController@addStudents');
Route::post('admin/register-student', 'Admin\UserManagementController@storeStudents');
//Route::post('/admin/reset-password', 'Admin\DashboardController@storepassword');

Route::get('/admin/message-inbox', function (){
  return view('admin/composer');
});



Auth::routes();

