<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Models\Siswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GuruController extends Controller
{
    public function getGuruData()
    {
        $siswa = Siswa::where('user_id', Auth::id())->first();
        $guru = Guru::where('kelas_id', $siswa->kelas_id)->first();
        return response()->json(['data' => $guru], 200);
    }
}
