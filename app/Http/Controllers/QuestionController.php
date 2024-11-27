<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Question;

class QuestionController extends Controller
{
    public function index()
    {
        $questions = Question::all();

        return view('question.index',compact('questions'));
        // viewに入っているquestionフォルダのindex.blade.phpを呼び出す
        
    }
}
