<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Models\Post;

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

// Route::get('/', function () {
//     $posts = Post::all();

//     dd($posts);
// });

Route::get('/posts', [PostController::class, 'index']);

Route::get('/create', [PostController::class, 'create']);

Route::get('/post/{id}/edit', [PostController::class, 'edit']);

Route::post('/create', [PostController::class, 'store']);

Route::get('/post/{id}', [PostController::class, 'show']);

Route::put('/post/{id}', [PostController::class, 'update']);

Route::delete('/posts/{id}', [PostController::class, 'destroy']);
