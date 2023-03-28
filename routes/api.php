<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\Visitor\PusherController;

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


Route::post('/visitor/get/token', [PusherController::class, 'getToken'])->name('visitor.getToken');

//Broadcast::routes(['middleware' => ['auth:visitor']]);
//Broadcast::routes(['middleware' => ['auth:sanctum']]);
Broadcast::routes();



// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
