<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DriverController;

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

Route::get('user_login', [DriverController::class, 'login_get']);
Route::post('/user_login', [DriverController::class, 'login_post']);
Route::get('/driver_register', [DriverController::class, 'register_get']);
Route::post('/driver_register', [DriverController::class, 'register_post']);
