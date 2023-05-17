<?php

namespace App\Http\Controllers;

use App\Models\Question;
use App\Models\Answer;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function store(Request $req)
    {
        $questions= new Question;

        $questions->name=$req->name;
        $questions->save();
        return redirect('/viewall');
    }
    public function answerStore(Request $req)
    {
        $answers= new Answer;

        $answers->name=$req->name;
        $answers->correct_answer=$req->correct_answer;
        $answers->question_id=$req->question_id;
        $answers->save();
        return redirect('/viewall');
    }


    public function create()
    {
        return view('create');
    }
    public function createAnswer()
    {
        return view('createanswer');
    }
    public function index()
    {
        return view('index');
    }
    public function viewAll(){
        $question  = question::all();
    
    return view('viewall', ['question' => $question]);
    }
}
