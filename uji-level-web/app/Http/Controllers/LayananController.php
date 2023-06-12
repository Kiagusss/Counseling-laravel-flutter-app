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
    public function indexpending()
    {
        $user = Auth::user()->id;
        $gurudata = Guru::where('user_id', $user)->first();
        $konselingbk = KonselingBK::where('guru_id', $gurudata->id)->where('status', 'pending')->with(['layanan', 'guru', 'siswa', 'walas'])->paginate(10);
        

        return view('layouts.layanan.index', compact('konselingbk'));
    }

    public function indexapproved()
    {
        $user = Auth::user()->id;
        $gurudata = Guru::where('user_id', $user)->first();
        $konselingbk = KonselingBK::where('guru_id', $gurudata->id)->where('status', 'approved')->with(['layanan', 'guru', 'siswa', 'walas'])->paginate(10);
        

        return view('layouts.layanan.index', compact('konselingbk'));
    }

    public function indexrescheduled()
    {
        $user = Auth::user()->id;
        $gurudata = Guru::where('user_id', $user)->first();
        $konselingbk = KonselingBK::where('guru_id', $gurudata->id)->where('status', 'rescheduled')->with(['layanan', 'guru', 'siswa', 'walas'])->paginate(10);
        

        return view('layouts.layanan.index', compact('konselingbk'));
    }

    public function indexcanceled()
    {
        $user = Auth::user()->id;
        $gurudata = Guru::where('user_id', $user)->first();
        $konselingbk = KonselingBK::where('guru_id', $gurudata->id)->where('status', 'canceled')->with(['layanan', 'guru', 'siswa', 'walas'])->paginate(10);
        

        return view('layouts.layanan.index', compact('konselingbk'));
    }

    public function show(string $id){

        $data = KonselingBK::find($id)->with('guru', 'siswa', 'layanan')->first();

        return view('layouts.layanan.show', compact('data'));

    }

    public function reschedulepage(string $id){
        $data = KonselingBK::find($id)->with('guru', 'siswa', 'layanan')->first();

        return view('layouts.layanan.reschedule', compact('data'));
    }

    public function reschedule(string $id, Request $request){
        
        $data = KonselingBK::find($id);

        $data->update([
            'status' => 'Approved',
            'jadwal_konseling' => $request->input('jadwal'),
        ]);

        $iduser = Auth::user()->id;


        return redirect('dashboard');
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
            'judul' => 'required',
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
            'judul' => $request->input('judul'),
            'alasan' => $request->input('alasan'),
            'status' => 'Pending',
        ]);
    
    
        return redirect('dashboard')->with('success', 'Guru berhasil Ditambahkan ');
    }

    public function archive(){
        $userId = Auth::user()->id;
        $siswa = Siswa::where('user_id', $userId)->first();
        $data = KonselingBK::where('siswa_id', $siswa->id)
        ->whereIn('status', ['Done', 'Cancelled'])
        ->with('guru', 'siswa', 'walas', 'layanan')
        ->get();
        // return dd($data);
        return view('layouts.layanan.archive', compact('data'));
    }
    public function cancel(string $id){
        
        $data = KonselingBK::where('id', $id);

        $data->update([
            'status' => 'Cancelled',
        ]);

        return redirect('dashboard');

    }

    /**
     * Display the specified resource.
     */
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
