<?php

use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\WalasController;
use App\Http\Controllers\PetaKerawananController;
use App\Models\LayananBK;

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



Route::get('admin-page', function () {
    return 'Halaman untuk Admin';
})->middleware('role:admin')->name('admin.page');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', [AdminController::class, 'indexActivity'])->name('dashboard');


    Route::middleware(['role:admin'])->group(function () {
        Route::name('siswa.')->group(function () {
            // Rute-rute untuk siswa
            Route::get('/index-siswa', [AdminController::class, 'indexSiswa'])->name('index');
            Route::get('/create-siswa', [AdminController::class, 'createSiswa'])->name('create');
            Route::post('/create-siswa', [AdminController::class, 'storeSiswa'])->name('store');
            Route::get('/siswa/update/{id}', [AdminController::class, 'editSiswa']);
            Route::patch('/siswa/update/{id}', [AdminController::class, 'updateSiswa']);
            Route::delete('/siswa/destroy/{id}', [AdminController::class, 'destroySiswa']);
            Route::get('/siswa/search', [AdminController::class, 'searchSiswa']);
            Route::get('/siswa/export', [AdminController::class, 'exportSiswa']);
        });
        Route::name('guru.')->group(function () {
            // Rute-rute untuk siswadst
            Route::get('/index-guru', [AdminController::class, 'indexGuru'])->name('index');
            Route::get('/create-guru', [AdminController::class, 'createGuru'])->name('create');
            Route::post('/create-guru', [AdminController::class, 'storeGuru'])->name('store');
            Route::get('/guru/update/{id}', [AdminController::class, 'editGuru']);
            Route::patch('/guru/update/{id}', [AdminController::class, 'updateGuru']);
            Route::delete('/guru/destroy/{id}', [AdminController::class, 'destroyGuru']);
            Route::get('/guru/search', [AdminController::class, 'searchGuru']);
            Route::get('/guru/export', [AdminController::class, 'exportGuru']);
        });
        Route::name('walas.')->group(function () {
            // Rute-rute untuk siswadst
            Route::get('/index-walas', [AdminController::class, 'indexWalas'])->name('index');
            Route::get('/create-walas', [AdminController::class, 'createWalas'])->name('create');
            Route::post('/create-walas', [AdminController::class, 'storeWalas'])->name('store');
            Route::get('/walas/update/{id}', [AdminController::class, 'editWalas']);
            Route::patch('/walas/update/{id}', [AdminController::class, 'updateWalas']);
            Route::delete('/walas/destroy/{id}', [AdminController::class, 'destroyWalas']);
            Route::get('/walas/search', [AdminController::class, 'searchWalas']);
            Route::get('/walas/export', [AdminController::class, 'exportWalas']);
        });
        Route::name('kelas.')->group(function () {
            // Rute-rute untuk siswadst
            Route::get('/index-kelas', [KelasController::class, 'indexKelas'])->name('index');
            Route::get('/create-kelas', [KelasController::class, 'createKelas'])->name('create');
            Route::post('/create-kelas', [KelasController::class, 'storeKelas'])->name('store');
            Route::get('/kelas/update/{id}', [KelasController::class, 'edit'])->name('kelas.edit');
            Route::put('/kelas/{id}', [KelasController::class, 'update'])->name('kelas.update');
            Route::delete('/kelas/destroy/{id}', [KelasController::class, 'destroy'])->name('kelas.destroy');
            Route::get('/kelas/search', [AdminController::class, 'searchKelas']);
            Route::get('/kelas/export', [AdminController::class, 'exportKelas']);
        });
    });

    Route::middleware(['role:wali_kelas'])->group(function () {

        Route::get('/walas/kerawanan/edit/{id}', [PetaKerawananController::class, 'kerawanan_walas_edit']);
        Route::post('/walas/kerawanan/store', [PetaKerawananController::class, 'kerawanan_walas_store'])->name('peta-kerawanan.store');
        Route::get('/walas/kerawanan/create/', [PetaKerawananController::class, 'kerawanan_walas_create'])->name('peta-kerawanan.add');
        Route::get('/walas/kerawanan/index', [PetaKerawananController::class, 'kerawanan_walas_index'])->name('peta-kerawanan.index');
        Route::put('/walas/kerawanan/update/{id}', [PetaKerawananController::class, 'kerawanan_walas_update'])->name('peta-kerawanan.update');
        Route::delete('/walas/kerawanan/delete/{id}', [PetaKerawananController::class, 'kerawanan_delete_walas']);
        Route::get('/walas/siswa/kerawanan', [PetaKerawananController::class, 'kerawananSiswa']);
        Route::get('/walas/pdf/{id}', [PetaKerawananController::class, 'pdfWalas']);
        Route::get('/walas/search/', [PetaKerawananController::class, 'searchSiswaGuru'])->name('walas.search');
        Route::get('/walas/search/peta', [PetaKerawananController::class, 'searchSiswaKerawanan'])->name('walas.peta');
    });
});


Route::middleware(['role:guru_bk'])->group(function () {
    Route::get('/guru/kerawanan/edit/{id}', [PetaKerawananController::class, 'kerawanan_guru_edit']);
    Route::post('/guru/kerawanan/store', [PetaKerawananController::class, 'kerawanan_guru_store'])->name('peta-kerawanans.store');
    Route::get('/guru/kerawanan/create/{id}', [PetaKerawananController::class, 'kerawanan_guru_create'])->name('peta-kerawanans.add');
    Route::get('/guru/kerawanan/index', [PetaKerawananController::class, 'kerawanan_guru_index'])->name('peta-kerawanans.index');
    Route::get('/kerawanan-indexs', [PetaKerawananController::class, 'kerawanan_guru_index_kelas'])->name('peta-kerawanans.kelas');
    Route::put('/guru/kerawanan/update/{id}', [PetaKerawananController::class, 'kerawanan_guru_update']);
    Route::delete('/guru/kerawanan/delete/{id}', [PetaKerawananController::class, 'kerawanan_delete_guru']);
    Route::get('/guru/kelas', [PetaKerawananController::class, 'guruKelas'])->name('guru.kelas');
    Route::get('/guru/siswa/{id}', [PetaKerawananController::class, 'gurusiswaIndex']);
    Route::get('/guru/pdf/{id}', [PetaKerawananController::class, 'pdfGuru']);
    Route::get('/siswa/search', [PetaKerawananController::class, 'searchSiswa']);
    Route::get('/kerawanan/search', [PetaKerawananController::class, 'searchKerawanan']);
});

Route::middleware(['role:guru_bk'])->group(function () {
    Route::name('siswa-bk.')->group(function () {
        Route::get('siswa-bk-{id}', [GuruController::class, 'index'])->name('index');
        Route::get('layanan-bk-pending-{id}', [LayananController::class, 'indexwaiting'])->name('layanan.pending');
        Route::get('layanan-bk-approved-{id}', [LayananController::class, 'indexapproved'])->name('layanan.Approved');
        Route::get('layanan-bk-canceled-{id}', [LayananController::class, 'indexrescheduled'])->name('layanan.canceled');
        Route::get('layanan-bk-schedule-{id}', [LayananController::class, 'schedule'])->name('reschedule');
        Route::get('/layanan-bk-archive-{id}', [LayananController::class, 'archive'])->name('archive');
        Route::patch('layanan-bk-schedule-{id}', [LayananController::class, 'scheduleset'])->name('reschedule');
        Route::get('layanan-createguru-pribadi', [LayananController::class, 'createprivateguru'])->name('create');
        Route::post('layanan-createguru-pribadi', [LayananController::class, 'storeprivateguru'])->name('store');
        Route::get('layanan-createguru-group', [LayananController::class, 'creategroupguru'])->name('create');
        Route::post('layanan-createguru-group', [LayananController::class, 'storegroupguru'])->name('store');
    });
});

Route::get('layanan-bk-show-{id}', [LayananController::class, 'show'])->name('show');
Route::get('/layanan-bk-cancel-{id}', [LayananController::class, 'cancelpage'])->name('cancelpage');
Route::patch('layanan-bk-cancel-{id}', [LayananController::class, 'cancel'])->name('cancel');
Route::get('/layanan-bk-done-{id}', [LayananController::class, 'donepage'])->name('cancelpage');
Route::patch('layanan-bk-done-{id}', [LayananController::class, 'done'])->name('cancel');






Route::middleware(['role:siswa'])->group(function () {
    Route::name('layanan.')->group(function () {
        Route::get('layanan-create-private', [LayananController::class, 'createprivate'])->name('create');
        Route::post('layanan-create-private', [LayananController::class, 'storeprivate'])->name('store');
        Route::get('layanan-create-group', [LayananController::class, 'creategroup'])->name('create');
        Route::post('layanan-create-group', [LayananController::class, 'storegroup'])->name('store');
        Route::get('/siswa-layanan-archive', [LayananController::class, 'archivemurid'])->name('archive');
        Route::get('siswa-layanan-waiting', [LayananController::class, 'siswawaiting']);
        Route::get('siswa-layanan-approved', [LayananController::class, 'siswaapproved']);
        Route::get('layanan-archive', [LayananController::class, 'archive'])->name('archive');
    });
});



Route::get('/nipd/{id}', 'WalasController@Nipd');
