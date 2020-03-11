<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Coment;
use App\Http\Requests\UpdateComent;
class ComentController extends Controller
{
    public function index()
    {
        $coments = Coment::all();
        
        return view('coments.index' , compact('coments'));
    }

    
        public function create()
        {
  
             $coments = Coment::all();
            
            return view('coments.create' , compact('coments'));
        }

        public function store(UpdateComent $request)
        {

            //データの取得
            $request -> all();

            //create保存　All全て取得 find一つ一致するやつ delete削除
            Coment::create([
                'body'=>$request->input('body')
            ]);

//viewはファイルを読み込みたいとき。redirectは処理が終わったらどこも経由しないで帰ってくる。
//画面の表示
            return redirect()->to('coments');
        }



}
