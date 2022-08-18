<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\Kelas6Controller;
use App\Http\Controllers\API\KurikulumController;
use App\Http\Controllers\API\ExtrakulikulerController;
use App\Http\Controllers\API\PrestasiController;
use App\Http\Controllers\API\PengumumanController;
use App\Http\Controllers\API\TartibController;
use App\Http\Controllers\API\RapotController;
use App\Http\Controllers\API\KelasController;

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

// Nilai
Route::resource('kelas6', Kelas6Controller::class);
Route::post('/kelas6/{id}', [Kelas6Controller::class,'update']);
Route::delete('/kelas6/{id}', [Kelas6Controller::class,'delete']);
Route::put('/kelas6/{id}', [Kelas6Controller::class,'update']);

// Kurikulum
Route::resource('kurikulum', KurikulumController::class);
Route::post('/kurikulum/{id}', [KurikulumController::class,'update']);
Route::delete('/kurikulum/{id}', [KurikulumController::class,'delete']);
Route::put('/kurikulum/{id}', [KurikulumController::class,'update']);

// Kurikulum
Route::resource('extrakulikuler', ExtrakulikulerController::class);
Route::post('/extrakulikuler/{id}', [ExtrakulikulerController::class,'update']);
Route::delete('/extrakulikuler/{id}', [ExtrakulikulerController::class,'delete']);
Route::put('/extrakulikuler/{id}', [ExtrakulikulerController::class,'update']);

// Prestasi
Route::resource('prestasi', PrestasiController::class);
Route::post('/prestasi/{id}', [PrestasiController::class,'update']);
Route::delete('/prestasi/{id}', [PrestasiController::class,'delete']);
Route::put('/prestasi/{id}', [PrestasiController::class,'update']);

// Pengumuman
Route::resource('pengumuman', PengumumanController::class);
Route::post('/pengumuman/{id}', [PengumumanController::class,'update']);
Route::delete('/pengumuman/{id}', [PengumumanController::class,'delete']);
Route::put('/pengumuman/{id}', [PengumumanController::class,'update']);

// Pengumuman
Route::resource('tartib', TartibController::class);
Route::post('/tartib/{id}', [TartibController::class,'update']);
Route::delete('/tartib/{id}', [TartibController::class,'delete']);
Route::put('/tartib/{id}', [TartibController::class,'update']);

// Rapot
Route::resource('rapot', RapotController::class);
Route::post('/rapot/{id}', [RapotController::class,'update']);
Route::delete('/rapot/{id}', [RapotController::class,'delete']);
Route::put('/rapot/{id}', [RapotController::class,'update']);

// Kelas
Route::resource('kelas', KelasController::class);
Route::post('/kelas/{id}', [KelasController::class,'update']);
Route::delete('/kelas/{id}', [KelasController::class,'delete']);
Route::put('/kelas/{id}', [KelasController::class,'update']);