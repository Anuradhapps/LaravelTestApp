<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\postController;
use App\Http\Controllers\welcomeContoller;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Auth::routes();

Route::get('/', [welcomeContoller::class,'index'])->name('welcome');

Route::get('/home',[HomeController::class,'index'])->name('home');
//post
Route::post('/post/store',[postController::class,'store'])->name('post.store');
Route::get('/post/{postId}/show',[postController::class,'show'])->name('post.show');
Route::get('/post/all-post',[HomeController::class,'allPost'])->name('post.all');
Route::get('/post/{postId}/edit',[postController::class,'edit'])->name('post.edit');
