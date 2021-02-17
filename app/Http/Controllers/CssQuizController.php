<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\cssQuiz;

class CssQuizController extends Controller
{
    public function index(){
        $cssQuizs = cssQuiz::all();

        return view('cssQuizs.index',compact('cssQuizs'));
    }

    public function create(){
        return view('cssQuizs.create');
    }

    public function getScore(){
        return $score = DB::select('select * from cssQuizs');
    }

    public function postScore(){
        $cssQuiz = new cssQuiz();

        $cssQuiz->id = request('id');
        $cssQuiz->Score = request('Score');

        $cssQuiz->save();

        return redirect('/cssQuizs');
    }
}
