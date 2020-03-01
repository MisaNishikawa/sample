<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use === このクラスを使います的な意味
use App\Task;

class TaskController extends Controller
{
    public function index()
    {
        //データの取得
        //データの取得はModelにお願いする
        //all = テーブル(task)のレコードを全て取得している
        // なんのレコードかというと、Class Taskに対応しているテーブルのレコード(行)
        //サーファード、サービスプロバイダー　←もう少しできるようになってから調べるといい
        $tasks = Task::all();
        // dd($tasks);
        //↑ddはvardump die的な役

        //viewを返す　  ここでのドット.は　tasksフォルダのindexファイルてこと
        return view('tasks.index', compact('tasks'));
        dd(1234);
    }
}
