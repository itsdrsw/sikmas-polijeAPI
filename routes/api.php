<?php

use App\Http\Controllers\Controller;
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

Route::post('/register', [Controller::class, 'register']);

Route::post('/login', [Controller::class, 'loginApi']);

Route::middleware('auth:sanctum')->group(function () {
    Route::get('user-data', [Controller::class, 'getUserData']);
});