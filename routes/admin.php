<?php

use App\Http\Controllers\AdminController;
use Illuminate\Routing\Route;

// Route::group(['middleware' => ['auth']], function () {
    Route::group(['prefix' => '/admin'], function () {
        Route::get('/'. [AdminController::class, 'index']);
    });
// });