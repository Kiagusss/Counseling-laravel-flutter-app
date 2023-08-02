<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Auth;
class UserController extends Controller
{
    public function getUser(Request $request)
    {
        $user = auth()->user();

        // Use Spatie's hasRole() method to check if the user has the 'siswa' role
        if (Auth::user()->hasRole('siswa')) {
            // Get the data siswa based on the user's ID
            $siswa = Siswa::with('kelas')->where('user_id', $user->id)->first();

            if ($siswa) {
                return response()->json([
                    'status' => 200,
                    'user' => [
                        'email'=>$user->email,
                        'nama' => $user->name,
                        'jenis_kelamin' => $siswa->jenis_kelamin,
                        'ttl' => $siswa->ttl,
                        'nama_kelas' => $siswa->kelas->nama,
                    ],
                    'message' => 'Successfully retrieved data',
                ]);
            }
        }

        return response()->json([
            'status' => 404,
            'message' => 'Data siswa not found',
        ], 404);
    }
}
