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
// Route::get←どのURLのときに何をするか
// どのURLのときに何をするかを決めるのがルート（ルーティング）の仕事
// /（localhost:8000の後ろのとこ？）が来たらファンクションを実行してください
Route::get('/', function () {
    //（関数viewはresourcessの中のviewsの中身を返す）
    //welcomeを返してくださいって事↓
    return view('welcome');
});

Route::get('/list','TaskController@index');

Route::get('/coments','ComentController@index');
///followersのとき、followerControllerのindexメソッドを
Route::get('/followers','FollowerController@index');
Route::get('/tasks/create','TaskController@create');

Route::POST('/tasks/store','TaskController@store');
