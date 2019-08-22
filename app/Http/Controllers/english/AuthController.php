<?php

namespace App\Http\Controllers\english;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class AuthController extends Controller
{
    public function show()
    {
        return view('english.authentication.login');
    }

    public function login(Request $request)
    {
        if(Auth::attempt(['email'=>$request->email, 'password'=>$request->password]))
        {
            return response()->json([
                'status' => 1,
                'route'  => route('en.home.index'),
            ]);
        }
        else
        {
            return response()->json([
                'status' => 0,
                'message'  => 'Wrong Credentials.',
            ]);
        }

    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('en.home.index');
    }

    /**
     * Send Code by mail to reset password.
     */

    public function sendCode(Request $request)
    {
        
    }
}
