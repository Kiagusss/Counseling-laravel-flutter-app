<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    function Login(Request $R){
        $user= User::where('email', $R->email)->first();

        if($user!='[]' && Hash::check($R->password,$user->password)){
            $token = $user->createToken('Personal Access Token')->plainTextToken;
            $response= ['status'=>200,'token'=>$token,'user'=>$user,'message'=>'Successfully Login'];
            return response()->json($response); 
        }else if($user=='[]'){
            $response= ['status'=>500,'user'=>$user,'message'=>'Not Found Account found with this Email'];
            return response()->json($response); 
        }else{
            $response= ['status'=>500,'user'=>$user,'message'=>'Wrong Email Or Password, Try Again!'];
            return response()->json($response); 
        }
    }

    public function index(string $id)
{    
    $user = User::find($id);
    $siswa = $user->siswa;
    $konselingbk = $siswa->konseling;

    $array = [];

    foreach($konselingbk as $item){
        array_push($array, [
            'nama_guru' => $item->guru->nama,
            'status' => $item->status,
            'jadwal_konseling' => $item->jadwal_konseling
        ]);
    }

    return response()->json([
        'data' => $array,
    ]);
}



}
