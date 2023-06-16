<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SiswaController extends Controller
{
    public function getSiswaData()
    {
        $siswa = Siswa::where('user_id', Auth::id())->with('kelas.walas', 'kelas.guru')->first();
        return response()->json(['data' => $siswa], 200);
    }

    public function getSiswa(Request $request)
    {
        $user = $request->user();
        $siswa = Siswa::where('user_id', $user->id)->first();
        $kelas = $siswa->kelas;
        $guru = $kelas->guru;
        $walas = $kelas->walas;

        $data = [
            'nama' => $siswa->nama,
            'nisn' => $siswa->nisn,
            'kelas' => $kelas->nama,
            'nama_guru' => $guru->nama,
            'nama_walas' => $walas->nama,
            'profile_photo_path' => $user->profile_photo_path
        ];

        return response()->json($data);
    }
}
