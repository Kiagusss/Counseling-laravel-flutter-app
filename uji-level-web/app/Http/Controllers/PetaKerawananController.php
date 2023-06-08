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
    public function create()
    {
        $guru = Guru::findOrFail(auth()->user()->guru_id);
        $kelas = Kelas::where('guru_id', $guru->id)->first();

        $siswaList = $kelas->siswa;

        return view('peta_kerawanan.create', compact('guru', 'siswaList'));
    }


}
