<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvtasker within a group which
| contains the "web" mtaskdleware group. Now create something great!
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

Route::get('/coments/create','ComentController@create');

Route::post('/coments/store','ComentController@store');


///followersのとき、followerControllerのindexメソッドを
Route::get('/followers','FollowerController@index');
Route::get('/tasks/create','TaskController@create');

Route::POST('/tasks/store','TaskController@store');

// 更新するための機能を作る（まずは編集画面）
// タスクコントローラーのeditを実行?
// Route::get('/tasks/{task}/edit','TaskController@edit');


Route::get('/tasks/{task}/edit','TaskController@edit')->name('tasks.edit');
Route::put('/tasks/{task}/update','TaskController@update')->name('tasks.update');

Route::delete('/tasks/{task}/delete', 'TaskController@delete')->name('tasks.delete');
Route::delete('/tasks/{task}/delete', 'TaskController@delete')->name('tasks.delete');
