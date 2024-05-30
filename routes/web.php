<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\CategoryController;
use Mews\Captcha\Captcha;

Route::middleware(['auth'])->group(function () {
    Route::resource('users', UserController::class);
    Route::resource('posts', PostController::class);
    Route::resource('comments', CommentController::class);
    Route::resource('categories', CategoryController::class);
});
Route::get('captcha', 'App\Http\Controllers\CaptchaController@reloadCaptcha');

