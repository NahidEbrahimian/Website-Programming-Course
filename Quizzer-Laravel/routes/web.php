<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\FinalController;
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
Route::get('/qestion/{id}', [QuizController::class, 'index']);
Route::post('/check-answer', [QuizController:: class, 'check']);
Route::get('/admin', [AdminController::class, 'index']);
Route::post('/add-question', [AdminController:: class, 'add_question']);
Route::get('/final', [FinalController::class, 'index']);
