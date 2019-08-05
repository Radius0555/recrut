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

Route::group(['prefix' => 'recruitment', 'as' => 'recruitment.'], function(){
   Route::get('/', 'RecruitmentController@index')->name('index');
   Route::get('/info', 'RecruitmentController@info')->name('info');
   Route::post('/store', 'RecruitmentController@store')->name('store');
   Route::get('/{recruitment}', 'RecruitmentController@destroy')->name('delete');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/recrut', 'RecrutController@index')->name('recrut.index');

Route::group(['prefix' => 'department', 'as' => 'department.'], function(){
    Route::get('/', 'DepartmentController@index')->name('index');
    Route::get('/create', 'DepartmentController@create')->name('create');
    Route::post('/store', 'DepartmentController@store')->name('store');
    Route::get('/edit/{department}', 'DepartmentController@edit')->name('edit');
    Route::patch('/{department}', 'DepartmentController@update')->name('update');
    Route::get('/{department}', 'DepartmentController@destroy')->name('delete');
});