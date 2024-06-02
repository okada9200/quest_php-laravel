<?php

use App\Http\Controllers\ArticleController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ArticleController::class, 'index']);
Route::get('/article/{id}', [ArticleController::class, 'show']);
Route::get('/editor', [ArticleController::class, 'create']);
Route::post('/editor', [ArticleController::class, 'store']);
Route::get('/editor/{id}', [ArticleController::class, 'edit']);
Route::put('/editor/{id}', [ArticleController::class, 'update']);

