<?php

use App\Http\Controllers\PhotoController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PostController;
use App\Http\Controllers\ProductController;

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

/* 
    Without using blade template functions
*/
Route::get('/', [PostController::class, 'index']);
Route::get('/posts/{post}', [PostController::class, 'view']);

Route::get('/all', [PostController::class, 'all']);
Route::post('/article', [PostController::class, 'store']);

// Route::get('/v2/posts/{post}', [PostController::class, 'single']);

Route::resource('products', ProductController::class);
Route::get('product-test', [ProductController::class, 'test']);


