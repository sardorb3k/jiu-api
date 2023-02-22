<?php

use App\Http\Controllers\Api\ApplyController;
use App\Http\Controllers\Api\AuthController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/auth/register', [AuthController::class, 'createUser']);
Route::post('/auth/login', [AuthController::class, 'loginUser']);
Route::post('/apply', [ApplyController::class, 'apply'])->middleware('auth:sanctum');
Route::post('/apply/location', [ApplyController::class, 'location_data'])->middleware('auth:sanctum');
Route::post('/apply/personal', [ApplyController::class, 'personal_information'])->middleware('auth:sanctum');
Route::post('/apply/passport', [ApplyController::class, 'passport_information'])->middleware('auth:sanctum');
Route::post('/apply/contact', [ApplyController::class, 'contact_information'])->middleware('auth:sanctum');
Route::post('/apply/check', [ApplyController::class, 'apply_check'])->middleware('auth:sanctum');
