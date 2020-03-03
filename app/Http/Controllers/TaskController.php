<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CreateTask;
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
    public function create()
    {
    return view('tasks.create');
    }


    public function store(CreateTask $request)
    {
        // dd($request->all(),$request->input('tel'));
        
        //データの保存(model)　タスクにお願いする 
        //Taskクラスのcreateっていうメソッドを使うと保存ができる。引数が一個、配列が入れれる。（入力したいカラム）
        Task::create([
            'tel'=> $request->input('tel'),
        ]);

        //一覧に戻る(view) /list(urlのこと)に戻る
        return redirect()->to('list');
    }

    public function edit(int $id)
    {
        // 編集対象のデータを取得する(Taskモデルにお願いする::)
        $task = Task::find($id);


        // 編集画面を表示する(tasksフォルダの中editフォルダ)
        // task（モデルから持ってきたデータ）って変数を返す
        return view('tasks.edit', compact('task'));
        //tasks/edit.blade.php

        //$taskは渡す
        //create.blade.phpをコピーでok

    }



}
