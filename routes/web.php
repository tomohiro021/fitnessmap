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
Route::get('/home', 'HomeController@index')->name('home.index');
Route::get('/mypage', 'FitnessmapController@mypage')->name('fitnessmap.mypage')->middleware('auth');


Auth::routes();

// システム管理者のみ
Route::group(['middleware' => ['auth', 'can:system-only']], function () {
// User：一覧・編集・削除
Route::resource('users', 'UserController', ['only' => [ 'index', 'show', 'edit','update','destroy']]);
// Keywords：一覧・登録・編集・削除
Route::resource('keywords', 'KeywordController');
});

// Gyms：一覧・編集・削除
Route::resource('gyms', 'GymController', ['only' => [ 'index', 'show', 'edit','update','destroy']]);
// GymContents：一覧・登録・編集・削除
Route::get('/gym_contents/{id}/approve', 'GymContentController@approve')->name('gym_contents.approve');
Route::resource('gym_contents', 'GymContentController')->middleware('auth');
