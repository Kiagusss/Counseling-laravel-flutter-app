<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Models\Kelas;
use App\Models\Walas;
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
    $gurus = Guru::all();
    $walas = Walas::all();

    return view('layouts.kelas.create', compact('gurus', 'walas'));
}
    

public function storeKelas(Request $request)
{
    $request->validate([
        'nama' => 'required',
        'guru_id' => 'required',
        'walas_id' => 'required',
    ]);

    Kelas::create([
        'nama' => $request->nama,
        'guru_id' => $request->guru_id,
        'walas_id' => $request->walas_id,
    ]);
    return redirect('index-kelas')->with('success', 'Kelas berhasil ditambahkan.');
}
}
