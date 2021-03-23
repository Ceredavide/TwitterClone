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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->group(function(){
    Route::get('/dashboard',[BlogPostController::class, 'index'])->name('dashboard');
    
    // GET /blog/1
    Route::get('/blog', [BlogPostController::class, 'index']);
    
    // GET /blog/1
    Route::get('/blog/{blogPost}', [BlogPostController::class, 'show']);
});