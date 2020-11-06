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

    Route::get('/courses/html/level1/lesson1', [App\Http\Controllers\HomeController::class, 'htmlLesson1'])->name('courses.html.html1_1');

    Route::get('/courses/html/level1/lesson2', [App\Http\Controllers\HomeController::class, 'htmlLesson2'])->name('courses.html.html1_2');

    Route::get('/courses/css/level1/lesson1', [App\Http\Controllers\HomeController::class, 'cssLesson1'])->name('courses.css.css1_1');
});

Route::get('/FAQs' , function() {
    return view('main.help');
});
/*Route::get('/settings', function() {
    return view('main.user_settings');
});*/