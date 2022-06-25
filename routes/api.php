<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\GroupsController;
use App\Http\Controllers\Api\CobaController;

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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

// Route Otomatis Berada di localhost:8000/api
Route::get('', [App\Http\Controllers\Api\CobaController::class, 'index']);
Route::resource('friends', App\Http\Controllers\Api\CobaController::class);


// Route::resources([
//     'api/friends' => CobaController::class,
//     'groups' => GroupsController::class
// ]);