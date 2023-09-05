<?php

use App\Http\Controllers\AdminPostController;
use App\Http\Controllers\AdminUsersController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\PostCommentsController;
use App\Http\Controllers\SessionsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;



Route::get('/', [PostController::class, 'index'])->name('home');

Route::get('/posts/{post:slug}', [PostController::class, 'show'])->where('post', '[A-z_\-]+');
Route::post('/posts/{post:slug}/comments', [PostCommentsController::class, 'store']);

Route::get('/register', [RegisterController::class, 'create'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store'])->middleware('guest');

Route::get('/login', [SessionsController::class, 'create'])->middleware('guest');
Route::post('/login', [SessionsController::class, 'store'])->middleware('guest');

Route::post('/logout', [SessionsController::class, 'destroy'])->middleware('auth');
Route::post('/newsletter', NewsletterController::class);


// ******  Admin Dashboard  *******

Route::view('/admin/dashboard', 'admin.dashboard')->middleware('can:admin');

// Categories





// Posts
Route::middleware('can:admin')->group(function () {

Route::get('/admin/posts', [AdminPostController::class, 'index']);
Route::get('/admin/posts/create', [AdminPostController::class, 'create']);
Route::post('/admin/posts', [AdminPostController::class, 'store']);
Route::get('/admin/posts/{post}/edit', [AdminPostController::class, 'edit']);
Route::patch('/admin/posts/{post}', [AdminPostController::class, 'update']);
Route::delete('/admin/posts/{post}', [AdminPostController::class, 'destroy']);

});



// Users
Route::middleware('can:admin')->group(function (){

Route::get('/admin/users', [AdminUsersController::class, 'index']);
Route::get('/admin/users/create', [AdminUsersController::class, 'create']);
Route::post('/admin/users', [AdminUsersController::class, 'store']);
Route::get('/admin/users/{user}/edit', [AdminUsersController::class, 'edit']);
Route::patch('/admin/users/{user}', [AdminUsersController::class, 'update']);
Route::delete('/admin/users/{user}', [AdminUsersController::class, 'destroy']);

});

