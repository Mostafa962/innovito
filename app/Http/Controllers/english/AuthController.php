<?php

namespace App\Http\Controllers\english;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Auth;
use Mail;

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
        $email = $request->email;
        $user = User::whereEmail($email)->first();
        if($user)
        {
            $code = time();

            $user->reset_password_code = $code;
            $user->save();

            Mail::send('emails.password_reset_code',['user' => $user, 'code' => $code],function($message) use ($user, $code){
                $message->to($user->email,$user->name)
                        ->subject('Password Reset Code');
                $message->from('tashtebk@gmail.com','Innovito Team') ;
            });

            return response()->json([
                'status' => 1,
                'type' => 'success',
                'title' => 'Success',
                'message' => 'Please check your email.',
            ]);


        }

        return response()->json([
            'status' => 0,
            'type' => 'error',
            'title' => 'ERROR !',
            'message' => 'Wrong Email !.',
        ]);

    }

    /**
     * Reset Password.
     */

    public function reset(Request $request)
    {
        $code = $request->code;
        $user = User::where('reset_password_code', $code)->first();

        if($user && !is_null($request->new_password))
        {
            $user->reset_password_code = 0;
            $user->password = bcrypt($request->new_password);
            $user->save();

            Auth::login($user);

            return response()->json([
                'status' => 1,
                'route' => route('en.home.index'),
            ]);

        }
        return response()->json([
            'status' => 0,
        ]);

    }

}
