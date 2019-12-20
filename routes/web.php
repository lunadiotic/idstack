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

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('admin')->name('admin.')->namespace('Admin')->middleware(['auth', 'verified', 'role:admin'])->group(function () {
    Route::prefix('setting')->name('setting.')->group(function () {
        Route::get('/', 'SettingController@index')->name('index');
        Route::post('store', 'SettingController@store')->name('store');
    });
});
