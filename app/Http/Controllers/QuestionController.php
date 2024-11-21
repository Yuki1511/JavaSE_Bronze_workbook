<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Question;

class QuestionController extends Controller
{
    $questions = Questions::all();
    return view('index',compact('question'));
}
