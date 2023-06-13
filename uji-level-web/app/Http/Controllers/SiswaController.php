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
}
