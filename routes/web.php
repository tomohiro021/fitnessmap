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

Route::get('/home', 'HomeController@index')->name('home');

Route::get('main', 'MainController@index');

//入力ページ
Route::get('/insert', 'InsertController@index')->name('insert.index');

//確認ページ
Route::post('/insert/confirm', 'InsertController@confirm')->name('insert.confirm');

//送信完了ページ
Route::post('/insert/complete', 'InsertController@complete')->name('insert.complete');