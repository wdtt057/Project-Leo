<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Image;
use Storage;
use File;

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

    public function updateProfile(Request $request) 
    {
        $request->validate([
            'firstname' =>'required|min:1|string|max:255',
            'lastname' =>'required|min:1|string|max:255',
            'username' =>'required|min:5|string|max:255'
        ]);

        $user = Auth::user();
        $user->firstname = $request['firstname'];
        $user->lastname = $request['lastname'];
        $user->username = $request['username'];
        $user->birthday = $request['birthday'];
        $user->save();
        return redirect('home#profile');
    }
    
    public function updatePhoto(Request $request)
    {
        $validatedData = $request->validate([
            'avatar' => 'required|image|mimes:jpg,png,jpeg,svg',
        ]);

        if($request->hasFile('avatar')){
            $user = Auth::user();
            $username = Auth::user()->username;
            $avatar = $request->file('avatar');
            $filename = $avatar->getClientOriginalName();
            $path = public_path('/images/avatar/'. $username . '/');
            if(!file_exists($path)) {
                File::makeDirectory($path, 0775, true);
            }
    		Image::make($avatar)->save( public_path('/images/avatar/'. $username . '/' . $filename ) );

    		
    		$user->avatar = '/images/avatar/' . $username . '/' . $filename;
    		$user->save();
            return redirect('home#profile');
        }
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
    public function cssLesson2(){
        return view('courses.css.css_lesson2');
    }
    public function cssLesson3(){
        return view('courses.css.css_lesson3');
    }
    public function jsLesson1(){
        return view('courses.js.js_lesson1');
    }
    public function jsLesson2(){
        return view('courses.js.js_lesson2');
    }
    public function jsLesson3(){
        return view('courses.js.js_lesson3');
    }

}
