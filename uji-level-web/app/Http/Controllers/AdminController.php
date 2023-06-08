<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Models\Kelas;
use App\Models\Siswa;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function indexSiswa()
    {

        $siswa = Siswa::with('kelasid')->get();
        return view('layouts.siswa.index', compact('siswa'));
    }

    public function indexGuru()
    {

        $guru = Guru::with('kelas')->get();
        return view('layouts.guru.index', compact('guru'));
    }

    public function indexWalas()
    {
        return view('layouts.walas.index');
    }



    /**
     * Show the form for creating a new resource.
     */
    public function createSiswa()
    {
        $kelas = Kelas::all();
        return view('layouts.siswa.create', compact('kelas'));
    }

    public function createGuru()
    {
        return view('layouts.guru.create');
    }

    public function createWalas()
    {
        return view('layouts.walas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function storeSiswa(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'nisn' => 'required',
            'jenis_kelamin' => 'required',
            'ttl' => 'required',
            'kelas_id' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8',
        ]);

        $user = User::create([
            'name' => $request->input('nama'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')),
        ]);
        $user->assignRole('siswa');

        $userId = $user->id;

        $siswa = Siswa::create([
            'user_id' => $userId,
            'nisn' => $request->input('nisn'),
            'nama' => $request->input('nama'),
            'ttl' => $request->input('ttl'),
            'jenis_kelamin' => $request->input('jenis_kelamin'),
            'kelas_id' => $request->input('kelas_id'),
        ]);


        return redirect('index-siswa')->with('success', 'Siswa berhasil Ditambahkan ');
    }
    /**
     * Show the form for editing the specified resource.
     */


    public function editsiswa($id)
    {
        $siswa = Siswa::with('kelasid')->findOrFail($id);

        $kelasid = Kelas::where('id', '!=', $siswa->kelas_id)->get(['id', 'nama']);
        return view('layouts.siswa.edit', ['siswa' => $siswa, 'kelasid' => $kelasid]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function updateSiswa(Request $request, string $id)
    {
        $siswa = Siswa::find($id);
        $user = User::find($id);
        $siswa->update([
            'nisn' => $request->nisn,
            'nama' => $request->nama,
            'umur' => $request->umur,
            'kelas' => $request->kelas_id,
            'ttl' => $request->ttl,
            'jenis_kelamin' => $request->jenis_kelamin,
        ]);
        $user->update([
            'name' => $request->nama,
        ]);


        $siswa->update();
        return redirect('index-siswa');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroySiswa($id)
    {
        $siswa = Siswa::findOrFail($id);
        $user = $siswa->user;
        $siswa->delete();
        $user->delete();

        return redirect('index-siswa')->with('success', 'Seller Data Deleted Successfully');
    }

    //Guru

    public function storeGuru(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'nipd' => 'required',
            'jenis_kelamin' => 'required',
            'ttl' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8',
        ]);

        $user = User::create([
            'name' => $request->input('nama'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')),
        ]);
        $user->assignRole('guru_bk');

        $userId = $user->id;

        $siswa = Guru::create([
            'user_id' => $userId,
            'nipd' => $request->input('nipd'),
            'nama' => $request->input('nama'),
            'ttl' => $request->input('ttl'),
            'jenis_kelamin' => $request->input('jenis_kelamin'),
        ]);


        return redirect('index-guru')->with('success', 'Siswa berhasil Ditambahkan ');
    }

    public function updateGuru(Request $request, string $id)
    {
        $guru = Guru::findOrFail($id);
        $user = $guru->user;

        $guru->nama = $request->input('nama');
        $guru->nipd = $request->input('nipd');
        $guru->ttl = $request->input('ttl');
        $guru->jenis_kelamin = $request->input('jenis_kelamin');
        $guru->save();
    
        $user->email = $request->input('email');
        $user->name = $request->input('nama');
        $user->password = $request->input('password');
        $user->save();
        
        return redirect('index-guru');
    }

    public function destroyGuru($id)
    {
        $guru = Guru::findOrFail($id); // Mengambil data user berdasarkan ID
        $user = $guru->user; // Mengambil data profile yang terkait dengan user
    
        // Hapus data profile terlebih dahulu
        $guru->delete();
    
        // Hapus data user
        $user->delete();

        return redirect('index-guru')->with('success', 'Seller Data Deleted Successfully');
    }

    public function editGuru($id)
    {
        $guru = Guru::with(['user'])->findOrFail($id);
        return view('layouts.guru.edit', compact('guru'));
    }
}
