<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class LoginController extends Controller
{
    public function login(Request $request) {
        
        // return $request;
        $login_data = $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        if (!auth()->attempt($login_data)) {
            return response(['message' => 'Invalid credentials']);
        }
        // Creating a token without scopes...

        $accessToken = Auth::user()->createToken('test');
        
        return response(['access_token' => $accessToken]);
    }
}
