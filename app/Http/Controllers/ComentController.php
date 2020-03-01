<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Coment;

class ComentController extends Controller
{
    public function index()
    {
        $coments = Coment::all();
        return view('coments.index' , compact('tasks'));
    }

}
