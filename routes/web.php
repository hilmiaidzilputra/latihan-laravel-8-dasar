<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

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
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', [PostController::class, 'about']);

Route::get('/blog', [PostController::class, 'index']);
// Halaman single post
Route::get('/post/{post:slug}', [PostController::class, 'show']);

Route::get('/categories', [PostController::class, 'listCategory']);

Route::get('/authors', [PostController::class, 'listAuthor']);

Route::get('/categories/{category:slug}', [PostController::class, 'category']);

Route::get('/author/{author:username}', [PostController::class, 'author']);

Route::get('/login', [LoginController::class, 'index']);

Route::get('/register', [RegisterController::class, 'index']);

Route::post('/register', [RegisterController::class, 'store']);
