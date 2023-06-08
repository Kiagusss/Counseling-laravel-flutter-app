<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Siswa;
use App\Models\Walas;
use Illuminate\Http\Request;

class WalasController extends Controller
{
    public function Nipd($id)
    {
        $walas = Walas::findOrFail($id);
    
        return view('profile.update-profile-information-form', compact('walas'));
    }
    
}
