<?php

use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\WalasController;
use App\Http\Controllers\PetaKerawananController;

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



Route::get('admin-page', function() {
    return 'Halaman untuk Admin';
})->middleware('role:admin')->name('admin.page');




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
        Route::post('/create-siswa', [AdminController::class, 'storeSiswa'])->name('store');
        Route::get('/siswa/update/{id}', [AdminController::class, 'editSiswa']);
        Route::patch('/siswa/update/{id}', [AdminController::class, 'updateSiswa']);
        Route::delete('/siswa/destroy/{id}', [AdminController::class, 'destroySiswa']);
    });
    Route::name('guru.')->group(function () {
    // Rute-rute untuk siswadst
    Route::get('/index-guru', [AdminController::class, 'indexGuru'])->name('index');
    Route::get('/create-guru', [AdminController::class, 'createGuru'])->name('create');
    Route::post('/create-guru', [AdminController::class, 'storeGuru'])->name('store');
    Route::get('/guru/update/{id}', [AdminController::class, 'editGuru']);
    Route::patch('/guru/update/{id}', [AdminController::class, 'updateGuru']);
    Route::delete('/guru/destroy/{id}', [AdminController::class, 'destroyGuru']);
});
Route::name('walas.')->group(function () {
    // Rute-rute untuk siswadst
    Route::get('/index-walas', [AdminController::class, 'indexWalas'])->name('index');
    Route::get('/create-walas', [AdminController::class, 'createWalas'])->name('create');
    Route::post('/create-walas', [AdminController::class, 'storeWalas'])->name('store');
    Route::get('/walas/update/{id}', [AdminController::class, 'editWalas']);
    Route::patch('/walas/update/{id}', [AdminController::class, 'updateWalas']);
    Route::delete('/walas/destroy/{id}', [AdminController::class, 'destroyWalas']);
});
Route::name('kelas.')->group(function () {
    // Rute-rute untuk siswadst
    Route::get('/index-kelas', [KelasController::class, 'indexKelas'])->name('index');
    Route::get('/create-kelas', [KelasController::class, 'createKelas'])->name('create');
    Route::post('/create-kelas', [KelasController::class, 'storeKelas'])->name('store');
    Route::get('/kelas/update/{id}', [KelasController::class, 'edit'])->name('kelas.edit');
    Route::put('/kelas/{id}', [KelasController::class, 'update'])->name('kelas.update');
    Route::delete('/kelas/destroy/{id}', [KelasController::class, 'destroy'])->name('kelas.destroy');
});
});

Route::middleware(['role:wali_kelas'])->group(function () {
    Route::name('peta.')->group(function () {
    Route::get('peta_kerawanan.create', [PetaKerawananController::class, 'creates'])->name('create');
    Route::get('peta-kerawanan', [PetaKerawananController::class, 'index'])->name('peta-kerawanan.index');
    Route::post('peta-kerawanan', [PetaKerawananController::class, 'store'])->name('peta-kerawanan.store');
    Route::get('peta-kerawanan/{id}/edit', [PetaKerawananController::class, 'edit'])->name('peta-kerawanan.edit');
    Route::put('peta-kerawanan/{id}', [PetaKerawananController::class, 'update'])->name('peta-kerawanan.update');
    Route::delete('peta-kerawanan/{id}', [PetaKerawananController::class, 'destroy'])->name('peta-kerawanan.destroy');
    });
});
});
Route::get('/nipd/{id}', 'WalasController@Nipd');






