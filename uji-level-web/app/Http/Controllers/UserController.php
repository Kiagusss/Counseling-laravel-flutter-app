<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Siswa;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

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
                        'id' => $user->id,
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

    public function profileupdate(Request $request, $id)
{
    $user = User::find($id);
    $siswa = Siswa::where('user_id', $id)->first(); // Use 'first()' to get a single model instance

    if (!$user || !$siswa) {
        return response()->json([
            'success' => false,
            'message' => 'User or Siswa not found.'
        ], 404);
    }

    $validated = Validator::make($request->all(), [
        'name' => 'required',
        'jenis_kelamin' => 'required'
    ]);

    if ($validated->fails()) {
        return response()->json($validated->errors(), 400);
    }

    // Update the user record
    $user->update([
        'name' => $request->name,
    ]);

    // Update the siswa record
    $siswa->update([
        'nama' => $request->name,
        'jenis_kelamin' => $request->jenis_kelamin,
    ]);

    return response()->json([
        'success' => true,
        'message' => 'Data sudah terupdate'
    ], 200);
}
}
