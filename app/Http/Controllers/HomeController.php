<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function login(Request $request){ 
        return response()->json([
            'code' => 200,
            'username' => $request->username,
            'password' => $request->password
        ]);
    }
}
