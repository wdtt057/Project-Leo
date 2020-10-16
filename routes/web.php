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
    return view('aboutus');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/verify', [App\Http\Controllers\Auth\RegisterController::class, 'verifyUser'])->name('verify.user');