<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\Kelas6Controller;

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

Route::resource('kelas6', Kelas6Controller::class);
Route::post('/kelas6/{id}', [Kelas6Controller::class,'update']);
Route::delete('/kelas6/{id}', [Kelas6Controller::class,'delete']);
Route::put('/kelas6/{id}', [Kelas6Controller::class,'update']);