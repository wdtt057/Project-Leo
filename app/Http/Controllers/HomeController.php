<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('main.home');
    }

    public function settings()
    {
        return view('main.user_settings');
    }
    public function html1(){
        return view('courses.html.html_lesson1');
    }
    public function html2(){
        return view('courses.html.html_lesson2');
    }
    public function html3(){
        return view('courses.html.html_lesson3');
    }
    public function htmlLesson1(){
        return view('courses.html.html1_1');
    }
    public function htmlLesson2(){
        return view('courses.html.html1_2');
    }
    public function htmlQuiz1(){
        return view('courses.html.html_quiz1');
    }
    public function cssLesson1(){
        return view('courses.css.css_lesson1');
    }
    public function jsLesson1(){
        return view('courses.js.js_lesson1');
    }

}
