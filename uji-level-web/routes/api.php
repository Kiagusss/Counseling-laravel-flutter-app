<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;
use App\Http\Controllers\AuthController;
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
});


Route::post('/login', [AuthController::class,'login']);
Route::get('/index/{id}', [AuthController::class, 'index']);

Route::get('/siswa', [SiswaController::class, 'getSiswa']);


