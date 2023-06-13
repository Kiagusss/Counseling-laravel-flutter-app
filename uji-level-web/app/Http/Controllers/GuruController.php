<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Models\Kelas;
use App\Models\Siswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GuruController extends Controller
{

   public function index(){

        $guru = Auth::user()->id;
        $kelas = Kelas::where('guru_id', $guru)->first();
        $kelasid = $kelas->id;
        $siswa = Siswa::where('kelas_id', $kelasid)->with('kelasid')->paginate(10);

        // return dd($siswa);
        return view('layouts.siswa.index', compact('siswa'));

   }

    public function getGuruData()
    {
        $siswa = Siswa::where('user_id', Auth::id())->first();
        $guru = Guru::where('kelas_id', $siswa->kelas_id)->first();
        return response()->json(['data' => $guru], 200);
    }

}
