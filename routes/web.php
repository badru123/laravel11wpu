<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ChirpController;
use App\Http\Controllers\PostController;
use App\Models\User;
use App\Models\Post;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/authors/{user:username}', function(User $user){
    return view('posts.index', ['title' => 'Article by '. $user->name, 'posts'=> $user->posts()->paginate(20)]);
})->middleware(['auth', 'verified']);
Route::get('/posts', function(){
    return view('posts.index', ['title' => 'Blog', 'posts' => Post::filter(request(['search','category','author']))->latest()->paginate(20)->withQueryString()]); 
})->middleware(['auth', 'verified']);
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::middleware(['auth','verified'])->group(function(){
//    Route::get('posts', [PostController::class, 'index'])->name('posts.index');
    Route::get('posts/{post:slug}', [PostController::class, 'show'])->name('posts.show');
//    Route::get('authors/{post:username}',[PostController::class, 'postauthor'])->name('authors.show');
});
//Route::resource('posts', PostController::class)->only(['index','store','edit','update','destroy'])->middleware(['auth','verified']);
Route::resource('chirps', ChirpController::class)->only(['index','store','edit','update','destroy'])->middleware(['auth','verified']);
require __DIR__.'/auth.php';
