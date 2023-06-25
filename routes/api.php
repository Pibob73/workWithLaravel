<?php

use App\Http\Controllers\Api\PostController;
use App\Http\Controllers\Api\TokenController;
use App\Http\Controllers\Api\ArticleController;
use App\Http\Controllers\Api\CurrentArticleController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::apiResource('/posts', PostController::class);
Route::apiResource('/token', TokenController::class);
Route::apiResource('/{user_id}/posts', ArticleController::class);
Route::apiResource('/{user_id}/posts/{article_id}', CurrentArticleController::class);
