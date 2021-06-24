<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;
// use App\Http\Controllers\MailController //Lo estoy comentando porque ocasiona un error des la linea 9 a 11


Route::get('/', function () {
    return redirect('/posts');
});

Route::get('/home', function(){
    return redirect('/posts');
});

Route::get('/', [PostController::class, 'index']);
Route::view('/posts/create', 'posts.create');
Route::post('/posts', [PostController::class, 'store']);
Route::get('/posts/,myPosts', [PostController::class, 'userPossts']);
Route::get('/posts/{id}', [PostController::class, 'show'])->name('post');
Route::post('/comments', [CommentController::class, 'store']);
Route::get('/email/{numero}',[MailController::class, 'enviar']);

Auth::routes();

// Route::get(
//     '/home',
//     [App\Http\Controllers\PostController::class,'index'])->name('home');