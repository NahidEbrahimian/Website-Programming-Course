<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\StarController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\CityController;
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

Route::get('/', [HomeController::class, 'index']);
Route::get('/product/{id}', [ProductController::class, "index_product"] );

Route::get('/admin', [AdminController::class, 'index']);
Route::get('/admin/cities', [CityController::class, 'get_all']);
Route::get('/admin/cities/add', [CityController::class, 'add_get']);
Route::post('/admin/cities/post', [CityController::class, 'add_post']);
Route::get('/admin/cities/edit/{id}', [CityController::class, 'edit_get']);
Route::post('/admin/cities/edit', [CityController::class, 'edit_post']);
Route::get('/admin/cities/delete/{id}', [CityController::class, 'delete']);

Route::get('/admin/products', [ProductController::class, 'get_all']);
Route::get('/admin/products/delete/{id}', [ProductController::class, 'delete']);

Route::get('/admin/users', [UserController::class, 'get_all']);

Route::get('/admin/carts', [CartController::class, 'get_all'])->middleware("auth");

Route::get('/admin/comments', [CommentController::class, 'get_all']);
Route::get('/admin/comments/delete/{id}', [CommentController::class, 'delete']);

Route::get('/client/login', [UserController::class, 'login_get']);
Route::post('/client/login', [UserController::class, 'login_post']);
Route::get('/client/log_out', [UserController::class, 'logout']);

Route::get('/client/registere', [UserController::class, 'registere_get']);
Route::post('/client/registere', [UserController::class, 'registere_post']);

Route::get('/client/user_profile', [UserController::class, 'profile'])->middleware("auth");

// Route