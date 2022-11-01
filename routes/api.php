<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Post;


/*REST CONTROLLER*/

Route::group(['prefix' => 'portal'], function () {

    Route::post('/login'    , [App\Http\Controllers\PortalController::class     ,'login']);
    Route::post('/register' , [App\Http\Controllers\PortalController::class     ,'register']);

});


/*REST DE USUARIOS*/

