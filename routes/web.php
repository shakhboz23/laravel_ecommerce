<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/test', function(){
    return "12312312";
});

Route::apiResource('/users', UserController::class);
