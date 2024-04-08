<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\postController;
use App\Http\Controllers\welcomeContoller;
use App\Http\Middleware\isAdmin;
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
Route::post('/post/{postId}/update',[postController::class,'update'])->name('post.update');
Route::get('/post/{postId}/delete',[postController::class,'delete'])->name('post.delete');

//admin
Route::get('admin/dashboard',[DashboardController::class,'index'])->middleware('admin')->name('admin.dashboard');
