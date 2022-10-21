<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Post;


/*REST CONTROLLER*/

Route::get('/obtenerPosts', [App\Http\Controllers\PostController::class, 'obtenerPosts']);

Route::get('/test', [App\Http\Controllers\PostController::class, 'test']);


/*REST DE USUARIOS*/

