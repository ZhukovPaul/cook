<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FeedbackController as FeedbackController;
use App\Http\Controllers\NewsController as NewsController;
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
 
    return view('home',[
        'title'     =>  'Научитесь готовить с нами!',
        'articles'  =>  App\Models\Article::latest('created_at')->take(2)->get()
        ]);
})->name("homepage");

Route::get('/about', function () {
    return view('about');
})->name("about");

Route::get('/feedback',function(){
    return view('feedback');
})->name('feedback');
 
Route::post('/feedback/submit', [ FeedbackController::class, 'submit'])->name('contact-form');

Route::get('/contact',function(){
    return view('contact');
})->name('contact');



Route::get('/news/{news}',  [NewsController::class,'show']);