<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class LoginController extends Controller
{
    public function index()
    {
        return 1;
    }

    public function show()
    {
        return view('admin.admin_login');
    }

    public function login(Request $request)
    {
        if(Auth::attempt(['email'=>$request->email,'password'=>$request->password]))
        {
            return response()->json([
                'status' => 1,
                'route'  => route('admin.home.index'),
            ]);
        }
        else
        {
            return response()->json([
                'status' => 1,
                'message'  => 'Wrong Credentials.',
            ]);
        }
    }
}
