<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('pages.index');
})->name('index');

Route::name('siswa.')->group(function () {
    // Rute-rute untuk siswadst
    Route::get('/index-siswa', [AdminController::class, 'indexSiswa'])->name('index');
    Route::get('/create-siswa', [AdminController::class, 'grades'])->name('create');
    Route::post('/create-siswa', [AdminController::class, 'grades'])->name('store');
});
Route::name('guru.')->group(function () {
    // Rute-rute untuk siswadst
    Route::get('/index-guru', [AdminController::class, 'indexGuru'])->name('index');
    Route::get('/create-guru', [AdminController::class, 'grades'])->name('create');
    Route::post('/create-guru', [AdminController::class, 'grades'])->name('store');
});
Route::name('walas.')->group(function () {
    // Rute-rute untuk siswadst
    Route::get('/index-walas', [AdminController::class, 'indexwalas'])->name('index');
    Route::get('/create-walas', [AdminController::class, 'grades'])->name('create');
    Route::post('/create-walas', [AdminController::class, 'grades'])->name('store');
});




Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
    'forbid:siswa',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('pages.dashboard');
    })->name('dashboard');
});
