<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/* Home */

Route::get('/', [ArticleController::class, 'index'])->name('index');

/* Articles Dashboard */
Route::get('/articles', [ArticleController::class, 'viewArticles'])->name('articles');
Route::post('/articles', [ArticleController::class, 'store']);

/* Update Article */
Route::post('/article/update/{id}', [ArticleController::class, 'updateArticle'])->name('update.article');

/* Delete Article */
Route::post('/article/delete', [ArticleController::class, 'deleteArticle'])->name('delete.article');

/* All articles of a category */
Route::get('/articles/{category}', [ArticleController::class, 'articlesByCategory'])->name('articles.category');

/* _______________________Users____________________________________________ */

/* Users Dashboard */
Route::get('/users', [UserController::class, 'viewUsers'])->name('users');
Route::post('/users', [UserController::class, 'store']);

/* Delete user */
Route::post('/user/delete', [UserController::class, 'deleteUser'])->name('delete.user');

/* Login */
Route::get('/login', [UserController::class, 'viewLogin'])->name('login');
Route::post('/login', [UserController::class, 'login']);

/* SignUp */
Route::get('/signup', [UserController::class, 'viewSignUp'])->name('signup');
Route::post('/signup', [UserController::class, 'store']);
