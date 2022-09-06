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
Route::get('/products', [ProductController::class, "get_all_for_client"] );

Route::get('/admin', [AdminController::class, 'index'])->middleware("auth");
Route::post('/admin/login', [AdminController::class, 'login_post']);
Route::get('/admin/login', [AdminController::class, 'login_get']);
Route::get('/admin/logout', [AdminController::class, 'logout']);

Route::get('/admin/cities', [CityController::class, 'get_all'])->middleware("auth");
Route::get('/admin/cities/add', [CityController::class, 'add_get'])->middleware("auth");
Route::post('/admin/cities/post', [CityController::class, 'add_post'])->middleware("auth");
Route::get('/admin/cities/edit/{id}', [CityController::class, 'edit_get'])->middleware("auth");
Route::post('/admin/cities/edit', [CityController::class, 'edit_post'])->middleware("auth");
Route::get('/admin/cities/delete/{id}', [CityController::class, 'delete'])->middleware("auth");

Route::get('/admin/products', [ProductController::class, 'get_all_for_admin'])->middleware("auth");
Route::get('/admin/products/delete/{id}', [ProductController::class, 'delete'])->middleware("auth");
Route::get('/admin/products/add', [ProductController::class, 'add_get'])->middleware("auth");
Route::post('/admin/products/post', [ProductController::class, 'add_post'])->middleware("auth");
Route::get('/admin/products/edit/{id}', [ProductController::class, 'edit_get'])->middleware("auth");
Route::post('/admin/products/edit', [ProductController::class, 'edit_post'])->middleware("auth");

Route::get('/admin/users', [UserController::class, 'get_all'])->middleware("auth");

Route::get('/admin/carts', [CartController::class, 'get_all'])->middleware("auth");
Route::post('/add-to-cart', [CartController::class, 'add'])->middleware("auth");
Route::get('/cart', [CartController::class, 'get'])->middleware("auth");

Route::get('/admin/comments', [CommentController::class, 'get_all'])->middleware("auth");
Route::get('/admin/comments/delete/{id}', [CommentController::class, 'delete'])->middleware("auth");

Route::get('/client/login', [UserController::class, 'login_get']);
Route::post('/client/login', [UserController::class, 'login_post']);
Route::get('/client/logout', [UserController::class, 'logout']);

Route::get('/client/registere', [UserController::class, 'registere_get']);
Route::post('/client/registere', [UserController::class, 'registere_post']);

Route::get('/client/user_profile', [UserController::class, 'profile'])->middleware("auth");

Route::post('/send-rating', [StarController::class, 'send_rating'])->middleware("auth");

Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});
// Route