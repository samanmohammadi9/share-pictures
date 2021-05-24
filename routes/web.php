<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;

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

Route::get('/', [Controllers\PostController::class,'index']);
Route::get('/newpost',[Controllers\PostController::class,'create']);
Route::post('/newpost',[Controllers\PostController::class,'store']);
Route::post('/comment',[Controllers\CommentController::class,'store']);
Route::get('/like/{post_id}',[Controllers\LikeController::class,'like']);
Route::get('/dislike/{post_id}',[Controllers\LikeController::class,'dislike']);
