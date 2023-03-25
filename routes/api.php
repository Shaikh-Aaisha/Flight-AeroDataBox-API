<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\FlightController;

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
Route::post('/flights-status-nearest',[FlightController::class,'flight']);//nearet flight
Route::post('/flights-status-byDate',[FlightController::class,'flightbyDate']);//nearest flight by date
Route::post('/flights-status-bydepartureDate',[FlightController::class,'flightdeparturedate']);//flight departure with date
Route::post('/delaybyflightno',[FlightController::class,'delaybyflightno']);//flight delay by flight number
Route::post('/AirportDepArr',[FlightController::class,'AirportDepArr']);//flight arrival and departure schedule

