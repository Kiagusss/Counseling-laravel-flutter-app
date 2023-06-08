<?php

namespace App\Http\Controllers;

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
        return view('layouts.siswa.index' , compact('siswa'));
    }

    public function indexGuru()
    {
        return view('layouts.guru.index');
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
        return view('layouts.siswa.create');
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
            'nama'=> 'required',
            'nisn'=> 'required',
            'jenis_kelamin'=> 'required',
            'ttl' => 'required',
            'kelas_id' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8',
        ]);

        $user = User::create([
            'name'=> $request->input('nama'),
            'email'=> $request->input('email'),
            'password'=> bcrypt($request->nput('password')),
        ]);

        $user->assignRole('siswa');

        $siswa = Siswa::create([
            'nama'=> $request->input('nama'),
            'nisn'=> $request->input('nisn'),
            'ttl'=> $request->input('ttl'),
            'jenis_kelamin'=> $request->input('jenis_kelamin'),
            'kelas_id'=> $request->input('kelas_id'),
            'user_id'=> $request->input('user_id'),
            'password'=> bcrypt($request->nput('password')),
        ]);

       

        return redirect('index-siswa')->with('success', 'Siswa berhasil Ditambahkan ');
    }
    /**
     * Show the form for editing the specified resource.
     */
  

     public function editsiswa($id)
      {
          $siswa = Siswa::with('kelasid')->findOrFail($id);
          
          $kelasid = Kelas::where('id', '!=', $siswa->kelas_id)->get(['id','nama']);
          return view('layouts.siswa.edit',['siswa' => $siswa, 'kelasid' => $kelasid]);
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

        return redirect('index-siswa')->with('success','Seller Data Deleted Successfully');
    }
}
