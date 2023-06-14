<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Models\User;
use App\Models\Kelas;
use App\Models\Siswa;
use App\Models\Walas;
use App\Models\PivotBK;
use App\Models\LayananBK;
use App\Models\KonselingBK;
use App\Models\LogActivity;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Relations\Pivot;

class LayananController extends Controller
{
    /**
     * Display a listing of the resource.
     */

     public function siswawaiting()
     {
         $user = Auth::user()->id;
         $siswa = Siswa::where('user_id', $user)->first();
         $pivot = PivotBK::where('siswa_id', $siswa->id)->get();

         $konselingbkIds = $pivot->pluck('konseling_id')->toArray();
         
         $konselingbk = KonselingBK::whereIn('id', $konselingbkIds)
        ->where('status', 'Waiting')
        ->with(['layanan', 'guru', 'siswa', 'walas'])
        ->paginate(10);
        
         return view('layouts.layanan.index-siswa', compact('konselingbk'));
     }
    public function siswaapproved(){
        $user = Auth::user();
        $siswadata = Siswa::where('user_id', $user->id)->first();
        $pivotdata = PivotBK::with('siswas')->where('siswa_id', $siswadata->id)->get();
        $konselingIds = $pivotdata->pluck('konseling_id')->toArray();
        $konselingbk = KonselingBK::with(['layanan', 'guru', 'siswa', 'walas'])
        ->whereIn('id', $konselingIds)
        ->whereIn('status', ['Approved'])
        ->get();
        // return dd($konselingbk);
        return view('layouts.layanan.index-siswa', compact('konselingbk'));
    }

    public function indexwaiting()
    {
        $user = Auth::user()->id;
        $gurudata = Guru::where('user_id', $user)->first();
        $konselingbk = KonselingBK::where('guru_id', $gurudata->id)->where('status', 'Waiting')->with(['layanan', 'guru', 'siswa', 'walas'])->paginate(10);
        return view('layouts.layanan.index', compact('konselingbk'));
    }
    public function indexapproved()
    {
        $user = Auth::user()->id;
        $gurudata = Guru::where('user_id', $user)->first();
        $konselingbk = KonselingBK::where('guru_id', $gurudata->id)->where('status', 'Approved')->with(['layanan', 'guru', 'siswa', 'walas'])->paginate(10);
        

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

        $data = KonselingBK::with('guru', 'siswa', 'walas')->find($id);
        $pivots = PivotBK::where('konseling_id', $id)->with('siswas')->get();

        // return dd($data);    
        return view('layouts.layanan.show', compact('data', 'pivots'));

    }

    public function schedule(string $id){
        $data = KonselingBK::with('guru', 'siswa', 'walas')->find($id);
        $pivots = PivotBK::where('konseling_id', $id)->with('siswas')->get();

        // return dd($data);
        return view('layouts.layanan.schedule', compact('data', 'pivots'));
    }

    public function scheduleset(string $id, Request $request){
        
        $data = KonselingBK::find($id);
        $data->update([
            'status' => 'Approved',
            'jadwal_konseling' => $request->input('jadwal'),
        ]);

        $iduser = Auth::user()->id;
        LogActivity::create([
            'activity' => auth()->user()->name. ' telah menetapkan jadwal pertemuan pada'.$request->input('jadwal')
        ]);

        return redirect('dashboard');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function createprivateguru()
    {
        $user = Auth::user();
        $iduser = $user->id;
        $dataguru = Guru::where('user_id', $iduser)->first();
        $datakelas = Kelas::where('guru_id', $dataguru->id)->first();
        $datasiswa = Siswa::all();
        $datalayanan = LayananBK::where('id', '<>', [2, 5])->get();
        // return dd($datalayanan);
        return view('layouts.layanan.create-private', compact('dataguru', 'datasiswa', 'datalayanan'));
    }

    public function createprivate(){
        $user = Auth::user();
        $iduser = $user->id;
        $datasiswa = Siswa::where('user_id', $iduser)->first();
        $datakelas = Kelas::where('id', $datasiswa->kelas_id)->first();
        $dataguru = Guru::where('id', $datakelas->guru_id)->first();
        $datalayanan = LayananBK::all();

        return view('layouts.layanan.create-private', compact('dataguru', 'datasiswa', 'datalayanan'));
    }

    public function creategroup(){
        $user = Auth::user();
        $iduser = $user->id;
        $datasiswaAll = Siswa::all();
        $datasiswa = Siswa::where('user_id', $iduser)->first();
        $datakelas = Kelas::where('id', $datasiswa->kelas_id)->first();
        $dataguru = Guru::where('id', $datakelas->guru_id)->first();
        $datalayanan = LayananBK::where('id', '<>', 1)->get();

        return view('layouts.layanan.create-group', compact('dataguru', 'datasiswa', 'datalayanan', 'datasiswaAll'));
    } 

    public function creategroupguru(){
        $user = Auth::user();
        $iduser = $user->id;
        $dataguru = Guru::where('user_id', $iduser)->first();
        $datakelas = Kelas::where('guru_id', $dataguru->id)->first();
        $datasiswaAll = Siswa::all();
        $datalayanan = LayananBK::where('id', '<>', 1)->get();
        // return dd($datalayanan);
        return view('layouts.layanan.create-group', compact('dataguru', 'datasiswaAll', 'datalayanan'));    }   
    /**
     * Store a newly created resource in storage.
     */

    public function storeprivateguru(Request $request){
        $user = Auth::user();
        $datakelas = Kelas::where('guru_id', $user->id)->first();
        $gurudata = Guru::where('user_id', $user->id)->first();
        $walasdata = Walas::where('id', $datakelas->walas_id)->first();

        $request->validate([
            'tujuan' => 'required',
            'judul' => 'required',
        ]);
        
        $konseling = KonselingBK::create([
            'layanan_id' => $request->input('layanan'),
            'guru_id' => $gurudata->id,
            'walas_id' => $walasdata->id,
            'judul' => $request->input('judul'),
            'tujuan' => $request->input('tujuan'),
            'jadwal_konseling' => $request->input('jadwal'),
            'status' => 'Approved',
        ]);

        PivotBK::create([
            'siswa_id' => $request->input('siswa'),
            'konseling_id' => $konseling->id,
        ]);

        LogActivity::create([
            'activity' => auth()->user()->name. 'telah telah mengatur jadwal pada' .$request->input('jadwal')
        ]);

        return redirect('/dashboard');
    }


     public function storeprivate(Request $request)
     {
         $request->validate([
             'tujuan' => 'required',
             'judul' => 'required',
         ]);


         $datasiswa = Siswa::where('user_id', Auth::user()->id)->first();        
         $datakelas = Kelas::where('id', $datasiswa->kelas_id)->first();
         $dataguru = Guru::where('id', $datakelas->guru_id)->first();
         $datawalas = Walas::where('id', $datakelas->walas_id)->first();
         
         $konseling = KonselingBK::create([
             'layanan_id' => $request->input('layanan'),
             'guru_id' => $dataguru->id,
             'walas_id' => $datawalas->id,
             'judul' => $request->input('judul'),
             'tujuan' => $request->input('tujuan'),
            ]);
             
             $konselingId = $konseling->id;
             
                 PivotBK::create([
                     'siswa_id' => $datasiswa->id,
                     'konseling_id' => $konseling->id,
                 ]);
             
         
         return redirect('dashboard')->with('success', 'Guru berhasil Ditambahkan ');
     }

     public function storegroupguru(Request $request){
        $validate = $request->validate([
            'siswa' => 'required'
        ]);

        $user = Auth::user();
        $gurudata = Guru::where('user_id', $user->id)->first();
        $datakelas = Kelas::where('guru_id', $gurudata->id)->first();
        $walasdata = Walas::where('id', $datakelas->walas_id)->first();

        $request->validate([
            'siswa' => 'required',
            'tujuan' => 'required',
            'judul' => 'required',
        ]);

        $konseling = KonselingBK::create([
            'layanan_id' => $request->input('layanan'),
            'guru_id' => $gurudata->id,
            'walas_id' => $walasdata->id,
            'judul' => $request->input('judul'),
            'tujuan' => $request->input('tujuan'),
            'status' => 'Approved',
            'jadwal_konseling' => $request->input('jadwal')
        ]);

        foreach ($validate['siswa'] as $item) {
            PivotBK::create([
                'siswa_id' => $item,
                'konseling_id' => $konseling->id,
            ]);
        }

        return redirect('dashboard')->with('success', 'Guru berhasil Ditambahkan ');

     }


        public function storegroup(Request $request)
        {
            $request->validate([
                'siswa' => 'required',
                'tujuan' => 'required',
                'judul' => 'required',
            ]);

            $validate = $request->validate([
                'siswa' => 'required'
            ]);


            $datasiswa = Siswa::where('user_id', Auth::user()->id)->first();        
            $datakelas = Kelas::where('id', $datasiswa->kelas_id)->first();
            $dataguru = Guru::where('id', $datakelas->guru_id)->first();
            $datawalas = Walas::where('id', $datakelas->walas_id)->first();
            $siswas = Siswa::where('nama', $request->input('siswa'))->get();
            
            $konseling = KonselingBK::create([
                'layanan_id' => $request->input('layanan'),
                'guru_id' => $dataguru->id,
                'walas_id' => $datawalas->id,
                'judul' => $request->input('judul'),
                'tujuan' => $request->input('tujuan'),
                ]);
                
                $konselingId = $konseling->id;
                
                foreach ($validate['siswa'] as $item) {
                    PivotBK::create([
                        'siswa_id' => $item,
                        'konseling_id' => $konseling->id,
                    ]);
                }
                
            
            return redirect('dashboard')->with('success', 'Guru berhasil Ditambahkan ');
        }

    public function archive(){
        $user = Auth::user()->id;
        $gurudata = Guru::where('user_id', $user)->first();
        $konselingbk = KonselingBK::with(['layanan', 'guru', 'siswa', 'walas'])->where('guru_id', $gurudata->id)->where('status', ['Cancelled', 'Done'])->get();
        // return dd($konselingbk);    
        return view('layouts.layanan.archive', compact('konselingbk'));
    }

    public function archivemurid(){
        $user = Auth::user();
        $siswadata = Siswa::where('user_id', $user->id)->first();
        $pivotdata = PivotBK::with('siswas')->where('siswa_id', $siswadata->id)->get();
        $konselingIds = $pivotdata->pluck('konseling_id')->toArray();
        $konselingbk = KonselingBK::with(['layanan', 'guru', 'siswa', 'walas'])
        ->whereIn('id', $konselingIds)
        ->whereIn('status', ['Cancelled', 'Done'])
        ->get();
        // return dd($konselingbk);
        return view('layouts.layanan.archive', compact('konselingbk'));


    }

    public function archivewalas(){
        $user = Auth::user();
        $userId = $user->id;
        $datawalas = Walas::where('user_id', $userId)->first();
        $datakelas = Kelas::where('walas_id', $datawalas->id)->first();
        $datasiswa = Siswa::where('kelas_id', $datakelas->id)->get();
        $siswaIds = $datasiswa->pluck('id')->toArray();
        $pivotdata = PivotBk::whereIn('siswa_id', $siswaIds)->get();
        $konselingIds = $pivotdata->pluck('konseling_id')->toArray();
        $konselingbk = KonselingBK::with(['layanan', 'guru', 'siswa', 'walas'])
        ->whereIn('id', $konselingIds)
        ->whereIn('status', ['Cancelled', 'Done'])
        ->get();

        return view('layouts.layanan.archive', compact('konselingbk'));
    }

    public function cancelpage(string $id){
        $data = KonselingBK::with('guru', 'siswa', 'walas')->find($id);
        $pivots = PivotBK::where('konseling_id', $id)->with('siswas')->get();

        // return dd($data);
        return view('layouts.layanan.cancel', compact('data', 'pivots'));
    }

    public function cancel(string $id, Request $request){
        
        $data = KonselingBK::where('id', $id);

        $data->update([
            'status' => 'Cancelled',
            'alasan_kesimpulan' => $request->input('alasan_kesimpulan')
        ]);

        return redirect('dashboard');

    }
    public function donepage(string $id){
        $data = KonselingBK::with('guru', 'siswa', 'walas')->find($id);
        $pivots = PivotBK::where('konseling_id', $id)->with('siswas')->get();

        // return dd($data);
        return view('layouts.layanan.done', compact('data', 'pivots'));
    }

    public function done(string $id, Request $request){
        
        $data = KonselingBK::where('id', $id);

        $data->update([
            'status' => 'Done ',
            'alasan_kesimpulan' => $request->input('alasan_kesimpulan')
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
