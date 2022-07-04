<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
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

Route::get('/', [ContactController::class, 'index']);
Route::get('/add-contact', [ContactController::class, 'add_contact_form']);
Route::post('/add-new-contact', [ContactController::class, 'add_contact_database']);
Route::post('/delete-contact', [ContactController::class, 'delete']);