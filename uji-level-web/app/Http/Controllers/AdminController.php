<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use Exception;
use App\Models\User;
use App\Models\Kelas;
use App\Models\Siswa;
use App\Models\Walas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\SiswaExport;
use App\Exports\GuruExport;
use App\Exports\WalasExport;
use App\Exports\KelasExport;



class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function indexSiswa()
    {

        $siswa = Siswa::with('kelasid')->paginate(10);
        return view('layouts.siswa.index', compact('siswa'));
    }

    public function indexGuru()
    {
        $guru = Guru::with('kelas')->paginate(10);
        return view('layouts.guru.index', ['guru' => $guru]);
    }


    public function indexWalas()
    {
        $walas = Walas::with('kelas')->paginate(10);
        return view('layouts.walas.index', ['data' => $walas]);
    }



    /**
     * Show the form for creating a new resource.
     */

    //CREATE\\

    public function createSiswa()
    {
        $dataKelas = Kelas::all();

        return view('layouts.siswa.create', ['data' => $dataKelas]);
    }

    public function createGuru()
    {
        return view('layouts.guru.create');
    }

    public function createWalas()
    {
        return view('layouts.walas.create');
    }

    //STORE\\

    public function storeWalas(Request $request)
    {

        $request->validate([
            'nipd' => 'required',
            'nama' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required',
            'ttl' => 'required',
            'jenis_kelamin' => 'required',
        ]);

        $user = User::create([
            'name' => $request->input('nama'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')),
        ]);
        $user->assignRole('wali_kelas');

        $userId = $user->id;

        $walas = Walas::create([
            'nipd' => $request->input('nipd'),
            'user_id' => $userId,
            'nama' => $request->input('nama'),
            'ttl' => $request->input('ttl'),
            'jenis_kelamin' => $request->input('jenis_kelamin'),
        ]);


        return redirect('index-walas')->with('success', 'Data berhasil Ditambahkan ');
    }

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

        $userId = $user->id;

        $user->assignRole('siswa');

        $siswa = Siswa::create([
            'user_id' => $userId,
            'nisn' => $request->input('nisn'),
            'nama' => $request->input('nama'),
            'ttl' => $request->input('ttl'),
            'jenis_kelamin' => $request->input('jenis_kelamin'),
            'kelas_id' => $request->input('kelas_id'),
        ]);


    return redirect('index-siswa')->with('success', 'Data berhasil Ditambahkan ');
}

        


    /**
     * Store a newly created resource in storage.
     */

    /**
     * Show the form for editing the specified resource.
     */

    //EDIT\\

    public function editsiswa($id)
    {
        $siswa = Siswa::with(['kelasid', 'user'])->findOrFail($id);
        $kelasid = Kelas::where('id', '!=', $siswa->kelas_id)->get(['id', 'nama']);
        return view('layouts.siswa.edit', ['siswa' => $siswa, 'kelasid' => $kelasid]);
    }

    public function editWalas($id)
    {
        $walas = Walas::with(['user'])->findOrFail($id);

        return view('layouts.walas.edit', ['walas' => $walas]);
    }

    public function editGuru($id)
    {
        $guru = Guru::with(['user'])->findOrFail($id);
        return view('layouts.guru.edit', compact('guru'));
    }

    /**
     * Update the specified resource in storage.
     */

    //UPDATE\\
    public function updateSiswa(Request $request, string $id)
    {
        $datasiswa = Siswa::find($id);
        $user = User::Where('id', $datasiswa->user_id);
        $datasiswa->update([
            'nisn' => $request->nisn,
            'nama' => $request->nama,
            'umur' => $request->umur,
            'kelas' => $request->kelas_id,
            'ttl' => $request->ttl,
            'jenis_kelamin' => $request->jenis_kelamin,
        ]);
        $user->update([
            'name' => $request->nama,
            'email' => $request->email,
            'password' => $request->password,
        ]);

        $datasiswa->update();
        return redirect('index-siswa');
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
        
        return redirect('index-guru')->with('success', 'Data berhasil diubah');
    }

    public function updateWalas(Request $request, string $id)
    {

        $datawalas = Walas::find($id);
        $user = User::Where('id', $datawalas->user_id);
        $datawalas->update([
            'nipd' => $request->nipd,
            'nama' => $request->nama,
            'ttl' => $request->ttl,
            'jenis_kelamin' => $request->jenis_kelamin,
        ]);
        $user->update([
            'name' => $request->nama,
            'email' => $request->email,
            'password' => $request->password,
        ]);

        return redirect('index-walas')->with('sucess', 'Data berhasil diubah');
    }


    /**
     * Remove the specified resource from storage.
     */

    //DESTROY\\
    public function destroySiswa($id)
    {
        $siswa = Siswa::findOrFail($id);
        $user = User::Where('id', $siswa->user_id);
        $siswa->delete();
        $user->delete();

        return redirect('index-siswa')->with('success','Data berhasil dihapus');
    }

    public function destroyWalas($id)
    {
        $walas = Walas::findOrFail($id);
        $user = User::Where('id', $walas->user_id);
        $walas->delete();
        $user->delete();

        return redirect('index-walas')->with('success','Data berhasil dihapus');
    }

    public function destroyGuru($id)
    {
        $guru = Guru::findOrFail($id); // Mengambil data user berdasarkan ID
        $user = $guru->user; // Mengambil data profile yang terkait dengan user

        // Hapus data profile terlebih dahulu
        $guru->delete();

        // Hapus data user
        $user->delete();

        return redirect('index-guru')->with('success','Data berhasil dihapus');
    }

    //SEARCH

    public function searchGuru(Request $request)
    {
        $keyword = $request->input('keyword');

        $guru = Guru::where('nama', 'LIKE', "%$keyword%")
            ->orWhere('nipd', 'LIKE', "%$keyword%")
            ->orWhere('jenis_kelamin', 'LIKE', "%$keyword%")
            ->orWhere('ttl', 'LIKE', "%$keyword%")
            ->orWhereHas('kelas', function ($query) use ($keyword) {
                $query->where('nama', 'LIKE', "%$keyword%");
            })
            ->paginate(10);

    return view('layouts.guru.index', compact('guru'));
}


public function searchWalas(Request $request)
{
    $keyword = $request->input('keyword');

    $data = Walas::where('nama', 'LIKE', "%$keyword%")
        ->orWhere('nipd', 'LIKE', "%$keyword%")
        ->orWhere('jenis_kelamin', 'LIKE', "%$keyword%")
        ->orWhere('ttl', 'LIKE', "%$keyword%")
        ->orWhereHas('kelas', function ($query) use ($keyword) {
            $query->where('nama', 'LIKE', "%$keyword%");
        })
        ->paginate(10);

    return view('layouts.walas.index', compact('data'));
}

public function searchSiswa(Request $request)
{
    $keyword = $request->input('keyword');

    $siswa = Siswa::where('nama', 'LIKE', "%$keyword%")
        ->orWhere('nisn', 'LIKE', "%$keyword%")
        ->orWhere('jenis_kelamin', 'LIKE', "%$keyword%")
        ->orWhere('ttl', 'LIKE', "%$keyword%")
        ->orWhereHas('kelas', function ($query) use ($keyword) {
            $query->where('nama', 'LIKE', "%$keyword%");
        })
        ->paginate(10);

    return view('layouts.siswa.index', compact('siswa'));
}

public function searchKelas(Request $request)
{
    $keyword = $request->input('keyword');

    $kelas = Kelas::where('nama', 'LIKE', "%$keyword%")
        ->orWhereHas('guru', function ($query) use ($keyword) {
            $query->where('nama', 'LIKE', "%$keyword%");
        })
        ->orWhereHas('walas', function ($query) use ($keyword) {
            $query->where('nama', 'LIKE', "%$keyword%");
        })
        ->paginate(10);

    return view('layouts.kelas.index', compact('kelas'));
}
}
