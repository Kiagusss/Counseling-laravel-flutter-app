<?php

use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\KelasController;

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





Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        if (auth()->user()->hasRole('siswa')){
            return view('welcome');
        }else{
            return view('pages.dashboard');
        }
        return view('pages.dashboard');
    })->name('dashboard');
    
Route::middleware(['role:admin'])->group(function () {
    Route::name('siswa.')->group(function () {
        // Rute-rute untuk siswa
        Route::get('/index-siswa', [AdminController::class, 'indexSiswa'])->name('index');
        Route::get('/create-siswa', [AdminController::class, 'createSiswa'])->name('create');
        Route::post('/create-siswa', [AdminController::class, 'storeSiswa']);
        Route::get('/siswa/update/{id}', [AdminController::class, 'editSiswa']);
        Route::patch('/siswa/update/{id}', [AdminController::class, 'updateSiswa']);
        Route::delete('/siswa/destroy/{id}', [AdminController::class, 'destroySiswa']);
    });
    Route::name('guru.')->group(function () {
    // Rute-rute untuk siswadst
    Route::get('/index-guru', [AdminController::class, 'indexGuru'])->name('index');
    Route::get('/create-guru', [AdminController::class, 'createGuru'])->name('create');
    Route::post('/create-guru', [AdminController::class, 'grades'])->name('store');
});
Route::name('walas.')->group(function () {
    // Rute-rute untuk siswadst
    Route::get('/index-walas', [AdminController::class, 'indexWalas'])->name('index');
    Route::get('/create-walas', [AdminController::class, 'createWalas'])->name('create');
    Route::post('/create-walas', [AdminController::class, 'grades'])->name('store');
});
Route::name('kelas.')->group(function () {
    // Rute-rute untuk siswadst
    Route::get('/index-kelas', [KelasController::class, 'indexKelas'])->name('index');
    Route::get('/create-kelas', [KelasController::class, 'createKelas'])->name('create');
    Route::post('/create-kelas', [KelasController::class, 'storeKelas'])->name('store');
});
});

});
