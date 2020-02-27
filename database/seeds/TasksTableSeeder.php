<?php

use Illuminate\Database\Seeder;

class TasksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //どんなデータベースを入れるか
        // tasksテーブルにインサートしますよっていう命令
        DB::table('tasks')->insert([
            //（連想配列みたいな感じ？） telっていうキーに123っていう値を入れてる
            //どのカラムに何を入れるか？
            'tel'=>123,
            'created_at'=>Carbon\Carbon::now(),
            'updated_at'=>Carbon\Carbon::now()
        ]);
    }

}
