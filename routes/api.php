<?php

use App\Http\Controllers\UserController;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/
Route::post('register', [UserController::class,'register']);
Route::post('login', [UserController::class,'login']);
Route::middleware(['auth:api'])->group(function () {
    Route::get('user', [UserController::class,'user']);
    Route::post('logout', [UserController::class,'logout']);
});
