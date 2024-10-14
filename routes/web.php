<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ArticleDetailController;

Route::get('/', [PublicController::class, "homepage"])->name("home");
Route::get('/articles', [ArticleController::class, "articlesPage"])->name("articles");
Route::get('/articles/detail-{id}', [ArticleController::class, "articleDetail"])->name("detailPage");
