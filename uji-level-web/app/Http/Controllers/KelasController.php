<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use Illuminate\Http\Request;

class KelasController extends Controller
{
    public function indexKelas()
    {
        $kelas = Kelas::with('guru', 'walas', 'siswa')->get();
    
        return view('layouts.kelas.index', compact('kelas'));
    }
    public function createKelas()
    {
        $kelas = Kelas::with('guru', 'walas', 'siswa')->get();
    
        return view('layouts.kelas.index', compact('kelas'));
    }
}
