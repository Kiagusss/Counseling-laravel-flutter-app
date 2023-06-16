<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class UserController extends Controller
{
    public function getUser(Request $request)
    {
        $user = $request->user();
        return response()->json($user);
    }

}
