<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;


//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/articles', [HomeController::class, 'articles'])->name('articles');

Route::get('/pages', [HomeController::class, 'pages'])->name('pages');

Route::get('/comments', [HomeController::class, 'comments'])->name('comments');

Route::get('/about', [HomeController::class, 'about'])->name('about');