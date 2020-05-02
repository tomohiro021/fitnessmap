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

Route::get('/home', 'HomeController@index')->name('home');

Route::get('main', 'MainController@index')->name('main');

//店舗入力ページ
Route::get('/insert', 'InsertController@index')->name('insert.index');

//確認ページ
Route::post('/insert/confirm', 'InsertController@confirm')
    ->name('insert.confirm')->middleware('FileUpload');

//送信完了ページ
Route::post('/insert/complete', 'InsertController@complete')->name('insert.complete');

