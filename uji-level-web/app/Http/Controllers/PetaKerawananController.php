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

    public function index()
{
    $user = Auth::user();
    $walas = $user->walas;
    $petaKerawanans = PetaKerawanan::where('walas_id', $walas->id)->get();

    return view('peta_kerawanan.index', compact('walas', 'petaKerawanans'));
}

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

    public function edit($id)
{
    $user = Auth::user();
    $walas = $user->walas;

    $petaKerawanan = PetaKerawanan::findOrFail($id);
    $siswa = $walas->kelas->siswa;

    return view('peta_kerawanan.edit', compact('walas', 'siswa', 'petaKerawanan'));
}


public function update(Request $request, $id)
{
    // Validasi inputan jika diperlukan

    $petaKerawanan = PetaKerawanan::findOrFail($id);
    $petaKerawanan->siswa_id = $request->siswa_id;
    $petaKerawanan->jenis_kerawanan = implode(',', $request->jenis_kerawanan);
    $petaKerawanan->save();

    // Proses pembaruan data peta kerawanan

    return redirect()->route('peta-kerawanan.index')->with('success', 'Data peta kerawanan berhasil diperbarui.');
}
public function destroy($id)
{
    $petaKerawanan = PetaKerawanan::findOrFail($id);
    $petaKerawanan->delete();

    // Proses penghapusan data peta kerawanan

    return redirect()->route('peta-kerawanan.index')->with('success', 'Data peta kerawanan berhasil dihapus.');
}



}
