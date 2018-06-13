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

//Route::get('/', function () {
//    return 'admin';
//});

Route::get('/','Admin\HomeController@home')->name('home');

Route::get('/goal/{id}','Admin\GoalController@show');
Route::get('/goals','Admin\GoalController@goals');
Route::get('/goal/show','Admin\GoalController@show')->name('goal/show');
Route::post('/goal/store','Admin\GoalController@store')->name('goal/store');
Route::post('/goal/finish','Admin\GoalController@finish')->name('goal/finish');
