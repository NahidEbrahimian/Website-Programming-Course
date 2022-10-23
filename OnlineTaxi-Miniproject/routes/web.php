<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DriverController;
use App\Http\Controllers\TripController;

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

// Route::get('/login', [UserController::class, 'login_get']);
Route::post('/login', [UserController::class, 'login_post']);
Route::get('/user_profile', [UserController::class, 'user_profile']);
Route::get('/register', [UserController::class, 'register_get']);
Route::post('/register', [UserController::class, 'register_post']);

Route::get('/driver_login', [UserController::class, 'driver_login_get']);
Route::post('/driver_login', [UserController::class, 'driver_login_post']);
Route::get('/driver_profile', [UserController::class, 'driver_profile']);
Route::get('/driver_register', [UserController::class, 'driver_register_get']);
Route::post('/driver_register', [UserController::class, 'driver_register_post']);

Route::get('/logout', [UserController::class, 'logout']);

Route::post('/request_taxi', [UserController::class, 'request_taxi']);
// Route::get('/user_profile', [UserController::class, 'user_profile']);
// Route::post('/accept_request', [TripController::class, 'accept_request']);
Route::post('/accept-request', [TripController::class, 'accept_request']);


Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});