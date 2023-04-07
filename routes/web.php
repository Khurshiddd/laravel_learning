<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [\App\Http\Controllers\PageController::class,'main']);
Route::get('about',[\App\Http\Controllers\PageController::class,'about'])->name('about');
Route::get('services',[\App\Http\Controllers\PageController::class,'services'])->name('services');
Route::get('project',[\App\Http\Controllers\PageController::class,'project'])->name('project');
Route::get('contact',[\App\Http\Controllers\PageController::class,'contact'])->name('contact');

Route::resource('posts', \App\Http\Controllers\PostController::class);

//Route::get('posts', [\App\Http\Controllers\PostController::class,'index'])->name('posts.index');
//Route::get('posts/{post}',[\App\Http\Controllers\PostController::class,'show'])->name('posts.show');
//Route::get('posts/create',[\App\Http\Controllers\PostController::class,'create'])->name('posts.create');
//Route::post('posts/create',[\App\Http\Controllers\PostController::class,'store'])->name('posts.store');
//Route::get('posts/{post}/edit',[\App\Http\Controllers\PostController::class,'edit'])->name('posts.edit');
//Route::put('posts/{post}/edit',[\App\Http\Controllers\PostController::class,'update'])->name('posts.update');
//Route::delete('posts/{post}/delete',[\App\Http\Controllers\PostController::class,'delete'])->name('posts.delete');





//Route::get('/users',[\App\Http\Controllers\userController::class,'index']);
//Route::get('/users/create',[\App\Http\Controllers\userController::class,'create']);
//Route::get('/users/{user}',[\App\Http\Controllers\userController::class,'show']);
//Route::post('/user-create',[\App\Http\Controllers\userController::class,'store']);