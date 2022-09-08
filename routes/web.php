<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\FlowerController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('/flowers', [FlowerController::class, 'index']);
// Insert :
Route::get('/flowers/insert', [FlowerController::class, 'create'])->middleware('login');
Route::post('/flowers/insert', [FlowerController::class, 'store'])->middleware('login');

// Update : 
Route::get('/flowers/update/{id}', [FlowerController::class, 'edit'])->middleware('login');
Route::put('/flowers/update/{id}', [FlowerController::class, 'update'])->middleware('login');

// Delete :
Route::get('/flowers/delete/{id}', [FlowerController::class, 'destroy'])->middleware('login');

// Show :
Route::get('/flowers/details/{id}', [FlowerController::class, 'show']);

// Contact :
// either create a new controller or write a function inside the route
Route::get('/flowers/contact', function () {
    return view('contact');
});

// Comment :
Route::get('/flowers/comments', [CommentController::class, 'index']);

//Login
Route::get('/flowers/login', [LoginController::class, 'logInForm'])->middleware('login');
Route::post('/flowers/login', [LoginController::class, 'login']);

Route::get('/flowers/logout', [LoginController::class, 'logout']);
