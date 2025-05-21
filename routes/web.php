<?php

use App\Models\articlescomments;
use App\Models\comments;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FormController;
use App\Models\Comment;
use App\Models\Page;


//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', [HomeController::class, 'home'])->name('home');

Route::get('/index', [HomeController::class, 'index'])->name('index');

Route::get('/articles', [HomeController::class, 'articles'])->name('articles');

Route::get('/api', [HomeController::class, 'api'])->name('api');

Route::get('/pages', [HomeController::class, 'pages'])->name('pages');

Route::get('/comments', [HomeController::class, 'comments'])->name('comments');

Route::get('/about', [HomeController::class, 'about'])->name('about');



// login form
Route::get('/login', function () {
    return view('Form.login');
})->name('login');
Route::post('/login', [FormController::class, 'login'])->name('login.process');

Route::get('/forgot-password', function () {
    // tampilkan halaman lupa password
    return 'Halaman lupa password';
})->name('password.request');


// Register form
Route::get('/register', function () {
    return view('Form.register');
})->name('register');


// Register process
Route::get('/register', function () {
    return view('Form.register');
})->name('register');

Route::post('/register', [FormController::class, 'register'])->name('register.process');


// Dashboard
Route::get('/dashboard', function () {
    return view('Homepage.dashboard');
})->name('dashboard');


// Logout






// Articles Comments
Route::get('/articlescomment', function () {
    $data = comments::with('articles')->get();
    return view('Comments.articlescomment', compact('data'));
})->name('articlescomment');


// pages comments
Route::get('/pagescomment', function () {
    $data = Comments::with('page')
        ->where('commentable_type', 'App\Models\page')
        ->get();
    return view('Comments.pagescomment', compact('data'));
})->name('pagescomment');