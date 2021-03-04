<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/test', function () {
    return view('test');
});
Route::get('/test2', function () {
    return view('test2');
});
Route::get('/', function () {
    return view('landing');
});

Route::get('/welcome', function() {
    return view('welcome');
});

Route::get('/course', function() {
    return view('course');
});

/* Route::get('/contact-us', function() {
    return view('contact');
}); */

Route::get('/contact-us', [ContactController::class, 'contact']);

Route::post('/send-message', [ContactController::class, 'sendEmail'])->name('contact.send');

Route::get('/about', function() {
    return view('about_us');
});


Auth::routes();

Route::get('/verify', [App\Http\Controllers\Auth\RegisterController::class, 'verifyUser'])->name('verify.user');

Route::group(['middleware' => ['preventBackHistory']],function(){
    
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('main.home');

    Route::get('/settings', [App\Http\Controllers\HomeController::class, 'settings'])->name('main.user_settings');

    Route::get('/html-lesson1', [App\Http\Controllers\HomeController::class, 'html1'])->name('courses.html.html_lesson1');

    Route::get('/html-lesson2', [App\Http\Controllers\HomeController::class, 'html2'])->name('courses.html.html_lesson2');
    
    Route::get('/html-lesson3', [App\Http\Controllers\HomeController::class, 'html3'])->name('courses.html.html_lesson3');

    Route::get('/courses/html/level1/lesson2', [App\Http\Controllers\HomeController::class, 'htmlLesson2'])->name('courses.html.html1_2');

    Route::get('/courses/html/quiz1', [App\Http\Controllers\HomeController::class, 'htmlQuiz1'])->name('courses.html.html_quiz1');

    Route::get('/css-lesson1', [App\Http\Controllers\HomeController::class, 'cssLesson1'])->name('courses.css.css_lesson1');

    Route::get('/css-lesson2', [App\Http\Controllers\HomeController::class, 'cssLesson2'])->name('courses.css.css_lesson2');

    Route::get('/css-lesson3', [App\Http\Controllers\HomeController::class, 'cssLesson3'])->name('courses.css.css_lesson3');

    Route::get('/js-lesson1', [App\Http\Controllers\HomeController::class, 'jsLesson1'])->name('courses.js.js_lesson1');

    Route::get('/js-lesson2', [App\Http\Controllers\HomeController::class, 'jsLesson2'])->name('courses.js.js_lesson2');

    Route::get('/js-lesson3', [App\Http\Controllers\HomeController::class, 'jsLesson3'])->name('courses.js.js_lesson3');

    Route::post('updateProfile', [App\Http\Controllers\HomeController::class, 'updateProfile']);
    Route::post('updatePhoto', [App\Http\Controllers\HomeController::class, 'updatePhoto']);
});

Route::get('/FAQs' , function() {
    return view('main.help');
});
/*Route::get('/settings', function() {
    return view('main.user_settings');
});*/

//quiz chart route
Route::get('get_css_data', 'App/Http/Controllers/QuizChartController@GetCSSQuizScoreData');
Route::get('get_html_data', 'App/Http/Controllers/QuizChartController@GetHTMLQuizScoreData');
Route::get('get_js_data', 'App/Http/Controllers/QuizChartController@GetJSQuizScoreData');
//end quiz chart route