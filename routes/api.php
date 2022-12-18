<?php

use App\Http\Controllers\peopleController;
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
Route::apiResource('/Czapla/305353/people', peopleController::class);
Route::get('/Czapla/305353/people/{id}',[peopleController::class,'show']);
Route::post('/Czapla/305353/people',[peopleController::class,'store']);
Route::delete('/Czapla/305353/people/{id}',[peopleController::class,'delete']);
Route::put('/Czapla/305353/people/{id}/{name}',[peopleController::class,'update']);

