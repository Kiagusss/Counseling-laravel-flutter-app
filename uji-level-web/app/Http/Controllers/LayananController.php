<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Models\User;
use App\Models\Kelas;
use App\Models\KonselingBK;
use App\Models\Siswa;
use App\Models\Walas;
use App\Models\LayananBK;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LayananController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $user = Auth::user();
        $iduser = $user->id;
        $datasiswa = Siswa::where('user_id', $iduser)->first();
        $datakelas = Kelas::where('id', $datasiswa->kelas_id)->first();
        $dataguru = Guru::where('id', $datakelas->guru_id)->first();
        $datalayanan = LayananBK::all();
        return view('layouts.layanan.create', compact('dataguru', 'datasiswa', 'datalayanan'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'alasan' => 'required',
        ]);

        $datasiswa = Siswa::where('user_id', Auth::user()->id)->first();        
        $datakelas = Kelas::where('id', $datasiswa->kelas_id)->first();
        $dataguru = Guru::where('id', $datakelas->guru_id)->first();
        $datawalas = Walas::where('id', $datakelas->walas_id)->first();
        
        $layanan = KonselingBK::create([
            'layanan_id' => $request->input('layanan'),
            'guru_id' => $dataguru->id,
            'siswa_id' => $datasiswa->id,
            'walas_id' => $datawalas->id,
            'alasan' => $request->input('alasan'),
            'status' => 'Pending',
        ]);
    
    
        return redirect('dashboard')->with('success', 'Guru berhasil Ditambahkan ');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
