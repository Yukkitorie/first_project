<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ContactsController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\PersonController;



Route::get('/', function () {
    return 'aaaaaa';
});


// CRUD via UI Posts
Route::get('/posts', [PostController::class, 'index'])->name('post.index');
Route::get('/posts/create', [PostController::class, 'create'])->name('post.create');
Route::post('/posts', [PostController::class, 'store'])->name('post.store');
Route::get('/posts/{post}', [PostController::class, 'show'])->name('post.show');
Route::get('/posts/{post}/edit', [PostController::class, 'edit'])->name('post.edit');
Route::patch('/posts/{post}', [PostController::class, 'update'])->name('post.update');
Route::delete('/posts/{post}', [PostController::class, 'delete'])->name('post.delete');

// CRUD via UI Person
Route::get('/person', [PersonController::class, 'index'])->name('person.index');
Route::get('/person/create', [PersonController::class,'create'])->name('person.create');
Route::post('/person', [PersonController::class, 'store'])->name('person.store');
Route::get('person/{person}',[PersonController::class, 'show'])->name('person.show');
Route::get('person/{person}/edit',[PersonController::class, 'edit'])->name('person.edit');
Route::patch('person/{person}',[PersonController::class, 'update'])->name('person.update');
Route::delete('person/{person}',[PersonController::class, 'delete'])->name('person.delete');

// CRUD via UI Cars


// Other routes
Route::get('/main', [MainController::class, 'index'])->name('main.index');
Route::get('/contacts', [ContactsController::class, 'index'])->name('contact.index');
Route::get('/about', [AboutController::class, 'index'])->name('about.index');
