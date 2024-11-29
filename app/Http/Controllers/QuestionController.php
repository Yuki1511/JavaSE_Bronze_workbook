<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Models\Question;

class QuestionController extends Controller
{
    public function index()
    {
        $questions = Question::all();

        return view('question/index',compact('questions'));
        // viewに入っているquestionフォルダのindex.blade.phpを呼び出す
        
    }

    public function questions_list(){
        $questions = Question::all();

        return view('question/questions_list', compact('questions'));
    }

    public function show(Post $post){
        
        return view('question/index', compact('post'));
    }
}
