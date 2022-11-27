<?php

use App\Http\Controllers\BooksController;
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

Route::get('/', [BooksController::class, 'showHome']);

Route::get('/detail/{id}', [BooksController::class, 'showDetail']);

Route::get('/category/manga', [BooksController::class, 'showManga']);

Route::get('/category/slice-of-life', [BooksController::class, 'showSoL']);

Route::get('/category/fantasy', [BooksController::class, 'showFantasy']);

Route::get('/category/sports', [BooksController::class, 'showSports']);

Route::get('/publisher', [BooksController::class, 'showPublishers']);

Route::get('/contact', function () { return view('contact');});
