<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Models\Kelas;
use App\Models\Siswa;
use App\Models\Walas;
use Illuminate\Http\Request;
use App\Models\PetaKerawanan;
use Illuminate\Support\Facades\Auth;

class PetaKerawananController extends Controller
{
    public function creates()
    {
        $user = Auth::user();
        $walas = $user->walas;

        $siswa = $walas->kelas->siswa;

        return view('peta_kerawanan.create', compact('walas', 'siswa'));
    }

    public function store(Request $request)
    {
        // Validasi inputan jika diperlukan
        $jenisKerawanan = implode(',', $request->jenis_kerawanan);
        $petaKerawanan = PetaKerawanan::create([
            'siswa_id' => $request->siswa_id,
            'walas_id' => $request->walas_id,
            'jenis_kerawanan' => $jenisKerawanan,
        ]);

        // Proses penyimpanan data peta kerawanan

        return redirect()->route('peta-kerawanan.create')->with('success', 'Data peta kerawanan berhasil disimpan.');
    }

}
