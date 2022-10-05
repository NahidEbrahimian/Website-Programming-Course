<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
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
    return view('index');
});

Route::get('/login', [UserController::class, 'login_get']);
Route::post('/login', [UserController::class, 'login_post']);
Route::get('/register', [UserController::class, 'register_get']);
Route::post('/register', [UserController::class, 'register_post']);
