<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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




Route::post('/api/v1/register','API\AuthController@Register');
Route::post('/api/v1/login','API\AuthController@Auths');
Route::middleware('auth:api')->get('/api/v1/user', function (Request $request) {
    return auth()->user();
});

Route::post('/v1/vehicle/register','API\VehiclesController@RegisterVehicle');
Route::post('/v1/vehicle/verify','API\VehiclesController@verifyVehicle');
Route::get('/v1/vehicle/categories','API\VehiclesController@getCategories');
Route::get('/v1/vehicle','API\VehiclesController@getAllVehicles');
Route::get('/v1/vehicle/{vcode}','API\VehiclesController@getSingleVehicle');

Route::get('/v1/certificates','API\CertificateController@getAllListeners');
Route::get('/v1/certificate/{vcode}','API\CertificateController@getSingleCertificate');
