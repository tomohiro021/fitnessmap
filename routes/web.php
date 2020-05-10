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

// Route::get('/', 'HomeController@index');

// Route::get('/home', 'HomeController@index')->name('home.index');

// 全ユーザー
Route::group(['middleware' => ['auth', 'can:user-higher']], function () {
    //
});

//管理者以上
Route::group(['middleware' => ['auth', 'can:admin-higher']], function () {
    //
});

Auth::routes();

Route::resource('users', 'UserController', ['only' => [ 'index', 'show', 'edit','update','destroy']]);
Route::resource('gyms', 'GymController', ['only' => [ 'index', 'show', 'edit','update','destroy']]);
Route::resource('gym_contents', 'GymContentController');

// システム管理者のみ
Route::group(['middleware' => ['auth', 'can:system-only']], function () {
});
//管理者ページ
//User：編集・削除
//Gyms：登録・編集・削除
//GymContents：編集・削除

//ホームページ
Route::get('/home', 'GymContentsController@home')->name('gym.home');
//店舗紹介ページ
Route::get('/info', 'GymContentsController@info')->name('gym.info');
//新規投稿ページ
Route::get('/form', 'GymContentsController@form')->name('gym.form')
    ->middleware('auth');
//送信完了ページ
Route::post('/form/complete', 'GymContentsController@complete')->name('gym.complete');
