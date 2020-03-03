<?php
//namespace === 部署名とか教室名
//class名 ===名前
// class名は重複してはいけない。
namespace App\Http\Controllers;

use Illuminate\Http\Request;
//appっていうクラスのfollowerさん
use App\Follower;

class FollowerController extends Controller
{
    public function index()
    {
        $followers = Follower::all();
//viewのなかのfollowersフォルダのなかのindex
//compact('followers')で変数定義して、inde.blade.phpにわたしている？
        return view('followers.index', compact('followers'));

    }
}
