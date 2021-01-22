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
//Route::get('admin/users', 'Admin\UserManagementController@listUsers');

Route::group(['middleware' => ['auth','can:isAdmin'], 'prefix' => 'admin'], function () {
  Route::get('/', 'Admin\DashboardController@index');
  Route::get('/students','Admin\DashboardController@student');
  Route::get('reset-password', 'Admin\DashboardController@resetpassword');
  Route::post('reset-password', 'Admin\DashboardController@storepassword');
  Route::get('add-user', 'Admin\UserManagementController@addUsers');
  Route::post('/add-user', 'Admin\UserManagementController@storeUsers');
  Route::get('/users', 'Admin\UserManagementController@listUsers');   
  Route::get('/register-student', 'Admin\UserManagementController@addStudents');
  Route::post('/register-student', 'Admin\UserManagementController@storeStudents');
Route::get('/view-student/{id}', 'Admin\UserManagementController@viewStudent');

 Route::post('session-setting', 'Admin\SettingController@storeSession');
 Route::get('session-setting', 'Admin\SettingController@setSession');
 
 Route::get('tution-setting', 'Admin\SettingController@setTution');
 Route::post('tution-setting', 'Admin\SettingController@storeTution');
 
 Route::post('asign-teacher', 'Admin\SettingController@asignTeacher');
 
 Route::get('class-management', 'Admin\SettingController@setClassDetails');
 
 Route::post('create-grade', 'Admin\SettingController@createClass');
 
});
Route::group(['middleware' => 'auth', 'prefix' => 'admin'], function () {
  Route::resource('message' , 'MessageController');
  Route::get('outbox' , 'MessageController@outbox');   
});

Route::resource('newslatter' , 'NewslatterController');

Route::group(['middleware' => ['auth','can:isTeacher'],  'prefix' => 'teacher'], function () {
    Route::resource('course-video', 'Teacher\CourseVideoController');
    Route::get('/', 'Teacher\DashboardController@student');
    Route::get('students', 'Teacher\DashboardController@student');
    Route::get('reset-password', 'Teacher\DashboardController@resetpassword');
    Route::get('view-student/{id}', 'Teacher\DashboardController@viewStudent');
    Route::resource('message' , 'MessageController');
    Route::get('outbox' , 'MessageController@outbox');
  
});

Route::group(['middleware' => ['auth','can:isParent'],  'prefix' => 'parent'], function () {
  Route::get('/','Parent\DashboardController@children');
  Route::get('students','Parent\DashboardController@children');
  Route::get('reset-password', 'Parent\DashboardController@resetpassword');
  
  Route::get('view-student/{id}', 'Parent\DashboardController@show');
  Route::get('course-video/{id}', 'Parent\DashboardController@videoLesson');
  Route::get('watch-video/{id}', 'Parent\DashboardController@watchLesson');
});





Auth::routes();

