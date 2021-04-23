<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProductController;
use App\Models\Post;
use App\Models\Phone;
use App\Models\Product;
use App\Models\User;

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



Route::get('/upload', [ProductController::class, 'showForm']);

Route::post('/upload', [ProductController::class, 'upload']);

Route::get('/category', [ProductController::class, 'index']);

Route::get('/category/{id}', [ProductController::class, 'category']);

Route::get('/new', [ProductController::class, 'newProduct']);

Route::post('/add', [ProductController::class, 'addProduct']);

Route::get('/product/{id}/edit', [ProductController::class, 'editProduct']);

Route::put('/product/{id}', [ProductController::class, 'updateProduct']);

Route::get('/deleteProduct/{id}', [ProductController::class, 'delete']);



Route::get('/posts', [PostController::class, 'index']);

Route::get('/create', [PostController::class, 'create']);

Route::get('/post/{id}/edit', [PostController::class, 'edit']);

Route::post('/create', [PostController::class, 'store']);

Route::get('/post/{id}', [PostController::class, 'show']);

Route::put('/post/{id}', [PostController::class, 'update']);

Route::get('delete/{id}', [PostController::class, 'destroy']);

// Route::apiResource('post', PostController::class);