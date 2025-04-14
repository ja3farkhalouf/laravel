<?php

use App\Http\Controllers\questionController;
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
Route::post("/post_question",questionController::class.'@postquestion');
Route::post("/post_stages",questionController::class.'@poststages');
Route::post("/get_question",questionController::class.'@getquestion');
Route::get("/get_all_question",questionController::class.'@getallquestion');