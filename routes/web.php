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
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
//Attendance routes
Route::get('/attendance', 'AttendanceController@index');
//Member routes
Route::get('/member', 'AttendanceController@index');
//Registry routes
Route::get('/registry', 'RegistryController@index');