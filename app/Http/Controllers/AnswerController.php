<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Answer;

class AnswerController extends Controller
{
    public function index()
     {
        $answers = Answer::All();
        return view('answer.index',compact('answers'));
        // viewに入っているanswerフォルダのindex.blade.phpを呼び出す
    }

}
