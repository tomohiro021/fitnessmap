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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/', 'HomeController@index');

// Route::get('/home', 'HomeController@index')->name('home.index');
//管理ページ
Route::get('/control', 'GymContentsController@control')->name('gym.control');
Route::get('/users/edit', 'GymContentsController@users_edit')->name('gym.users.edit');
Route::post('/users/edit', 'GymContentsController@users_update')->name('gym.users.edit');
Route::get('/users/delete', 'GymContentsController@users_delete')->name('gym.users.delete');
Route::post('/users/delete', 'GymContentsController@users_remove')->name('gym.users.delete ');
Route::get('/gyms/edit', 'GymContentsController@gyms_edit')->name('gym.gyms.edit');
Route::post('/gyms/edit', 'GymContentsController@gyms_update')->name('gym.gyms.edit');
Route::get('/gyms/delete', 'GymContentsController@gyms_delete')->name('gym.gyms.delete');
Route::post('/gyms/delete', 'GymContentsController@gyms_remove')->name('gym.gyms.delete');
Route::get('/gym_contents/edit', 'GymContentsController@gym_contents_edit')->name('gym.gym_contents.edit');
Route::post('/gym_contents/edit', 'GymContentsController@gym_contents_update')->name('gym.gym_contents.edit');
Route::get('/gym_contents/delete', 'GymContentsController@gym_contents_delete')->name('gym.gym_contents.delete');
Route::post('/gym_contents/delete', 'GymContentsController@gym_contents_remove')->name('gym.gym_contents.delete');
//ホームページ
Route::get('/home', 'GymContentsController@home')->name('gym.home');
//店舗紹介ページ
Route::get('/info', 'GymContentsController@info')->name('gym.info');
//店舗入力ページ
Route::get('/form', 'GymContentsController@form')->name('gym.form');
//送信完了ページ
Route::post('/form/complete', 'GymContentsController@complete')->name('gym.complete');

