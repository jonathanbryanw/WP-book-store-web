<?php

use App\Http\Controllers\BookController;
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

Route::get('/home', [BookController::class, 'viewHome']);
Route::get('/detail/{id}', [BookController::class, 'viewDetail']);
Route::get('/contact', [BookController::class, 'viewContact']);
Route::get('/category/fiction', [BookController::class, 'viewFiction']);
Route::get('/category/science', [BookController::class, 'viewScience']);
Route::get('/category/computer', [BookController::class, 'viewComputer']);
