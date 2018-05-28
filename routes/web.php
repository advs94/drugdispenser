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

Route::resource('caregivers','CaregiverController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin/caregivers', 'HomeController@caregivers');

Route::get('/admin/patients', 'HomeController@patients');

Route::get('/admin/pills', 'HomeController@pills');

Route::get('/admin/profiles', 'HomeController@profiles');

Route::get('/admin/users', 'HomeController@users');

Route::get('/admin/settings', 'HomeController@settings');
