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

// 1.ルーティング作成(登録画面・ブログ登録)
// 2.コントローラー作成(登録画面表示)
// 3.登録画面のBladeを表示(CSRF対策)
// 4.コントローラー作成(ブログ登録)
// 5.バリデーション作成
// 6.エラー処理

//ブログ一覧画面を表示
Route::get('/', 'BlogController@showList')->name('blogs');

//ブログ登録画面を表示
Route::get('/blog/create', 'BlogController@showCreate')->name('create');

//ブログ登録
Route::post('/blog/store', 'BlogController@exeStore')->name('store');

//ブログ詳細画面を表示
Route::get('/blog/{id}', 'BlogController@showDetail')->name('show');
