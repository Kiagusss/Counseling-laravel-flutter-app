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
        $siswa = Siswa::where('kelas_id', $kelasid)->get();

        // return dd($siswa);
        return view('layouts.siswa.index', compact('siswa'));

   }
}
