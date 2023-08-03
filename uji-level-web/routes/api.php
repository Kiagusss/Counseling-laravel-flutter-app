<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SiswaController;

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

Route::group(['middleware'=>['auth:sanctum']], function(){
    Route::get('/user', [UserController::class, 'getUser']);
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::get('/index/{id}', [AuthController::class, 'index']);
    Route::get('/siswa', [SiswaController::class, 'getSiswa']);
    Route::get('/form-layanan', [LayananController::class, 'createprivatemobile']);
    Route::post('/store-layanan', [LayananController::class, 'storeprivatemobile']);
    Route::get('/show-layanan/{id}', [LayananController::class, 'showmobile']);
    Route::get('/index-layanan', [AuthController::class, 'indexlayanan']);
    
});


Route::post('/login', [AuthController::class,'login']);



