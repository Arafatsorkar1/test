<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;


Route::get('/',[HomeController::class,'home'])->name('home');
Route::get('/blog',[BlogController::class,'blog'])->name('blog');
Route::post('/new-blog',[BlogController::class,'newBlog'])->name('data-road');

Route::get('/manage-blog',[BlogController::class,'manageBlog'])->name('blog.manage');

Route::get('/delete/{id}',[BlogController::class,'delete'])->name('delete');
Route::get('/edit{id}',[BlogController::class,'edit'])->name('edit');

Route::post('/update{id}',[BlogController::class,'update'])->name('update');
