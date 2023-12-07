<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MessageController;


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


Route::middleware(['auth'])->group(function () {
    Route::get('/base', [UserController::class, 'index']);
    Route::post('/base/edit',[UserController::class,'profileEdit']);
    Route::post('/base/message',[MessageController::class,'SendMessage']);
    Route::get('base/search',[UserController::class, 'Search']);
    Route::get('base/profile',[UserController::class, 'Profile']);
    Route::post('/base/setGym',[MessageController::class,'setGym']);
});