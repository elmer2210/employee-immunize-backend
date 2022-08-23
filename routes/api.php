<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CatalogueController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\UserController;

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
//Private Routes
Route::middleware('auth:sanctum')->get('/private', function (Request $request) {
    return $request->user();
});



Route::group (['middleware' => ['auth:sanctum']], function (){
   //Here put the route that need security
    Route::post('/logaut', [AuthController::class, 'logaut']);

});

//Public Routes

Route::get('/catalogues', [CatalogueController::class, 'index']);
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::get('/users', [UserController::class, 'getAllUser']);
Route::get('/user/{id}', [UserController::class, 'getUserById']);
Route::put('/user/{id}', [UserController::class, 'updateUser']);
