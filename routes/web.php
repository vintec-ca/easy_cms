<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;

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

Route::get('/', [FrontController::class, 'index']);

Route::get('/blog/{slug}', [FrontController::class, 'view']);
Route::get('/blog/category/{slug}', [FrontController::class, 'category_filter']);
Route::get('/blog/tag/{slug}', [FrontController::class, 'tag_filter']);
