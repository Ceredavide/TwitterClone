<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\BlogPostController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::middleware(['auth:sanctum', 'verified'])->group(function () {

    // GET blogs
    Route::get('/blog', [BlogPostController::class, 'index'])->name('Home');

    // GET /blog/1
    Route::get('/blog/{blogPost}', [BlogPostController::class, 'show']);

    //shows create post form
    Route::get('/blog/create/post', [BlogPostController::class, 'create']);
    
    //saves the created post to the databse
    Route::post('/blog/create/post', [BlogPostController::class, 'store']); 
    

    //shows edit post form
    Route::get('/blog/{blogPost}/edit', [BlogPostController::class, 'edit']); 
    
    //commits edited post to the database 
    Route::put('/blog/{blogPost}/edit', [BlogPostController::class, 'update']); 

    //deletes post from the database
    Route::delete('/blog/{blogPost}', [BlogPostController::class, 'destroy']); 
});
