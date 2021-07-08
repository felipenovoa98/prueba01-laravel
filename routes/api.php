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
// middleware es para proteger las rutas
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
//Route::resource('reserva', ReservaController::class);
//para hacer pruebas en possman 
Route::resource('reserva', ReservaController::class);
Route::resource('users', UserController::class);
Route::post('/login','UserController@login');

