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
// Route::get('test', 'TestController@index');
// Route::post('undertest', 'TestController@undertest');
// Route::post('testend', 'TestController@testend');

Auth::routes();

Route::get('/', 'HomeController@index');

// Route::get('/home', 'HomeController@index')->name('home.index');
//管理ページ
Route::get('/control', 'GymContentsController@control')->name('gym.control');
Route::get('/users', 'GymContentsController@users_edit')->name('gym.users');
Route::post('/users', 'GymContentsController@users_update')->name('gym.users');
Route::get('/gyms', 'GymContentsController@gyms_edit')->name('gym.gyms');
Route::post('/gyms', 'GymContentsController@gyms_update')->name('gym.gyms');
Route::get('/gym_contents', 'GymContentsController@gym_contents_edit')->name('gym.gym_contents');
Route::post('/gym_contents', 'GymContentsController@gym_contents_update')->name('gym.gym_contents');
//ホームページ
Route::get('/home', 'GymContentsController@home')->name('gym.home');
//店舗紹介ページ
Route::get('/info', 'GymContentsController@info')->name('gym.info');
//店舗入力ページ
Route::get('/form', 'GymContentsController@form')->name('gym.form');
//送信完了ページ
Route::post('/form/complete', 'GymContentsController@complete')->name('form.complete');

