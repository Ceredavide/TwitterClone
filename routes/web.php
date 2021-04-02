<?php

use Illuminate\Support\Facades\Route;

use \App\Http\Controllers\BlogPostController;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->group(function () {

    Route::get('/dashboard', [BlogPostController::class, 'index'])->name('dashboard');
    Route::get('/dashboard/{blogPost}', [BlogPostController::class, 'show']);

    Route::get('/blog', [BlogPostController::class, 'add']);
    Route::post('/blog', [BlogPostController::class, 'create']);

    Route::get('/blog/{blogPost}', [BlogPostController::class, 'edit']);
    Route::post('/blog/{blogPost}', [BlogPostController::class, 'update']);
});
