<?php

use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/register', [RegisterController::class,"reg"]);

// Route::get('/sign-up', [RegisterController::class,"index"] );

Route::get('/signup', [RegisterController::class,"index"]);
Route::post('/signup', [RegisterController::class,"store"]);
Route::delete('/register/{id}', [RegisterController::class,"delete"])->name('delete.register');



