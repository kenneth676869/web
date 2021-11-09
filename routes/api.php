<?php

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
// Route::get('stud-info',[studentinformationsControllerAPI::class,'studInfo']);
Route::post('login',[Dota2ControllerAPI::class,'login']);
Route::post('register',[Dota2ControllerAPI::class,'register']);
Route::post('reset-password',[Dota2ControllerAPI::class,'resetPassword']);