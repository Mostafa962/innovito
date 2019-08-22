<?php

namespace App\Http\Controllers\english;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;
use Auth;
use App\User;

class ProfileController extends Controller
{
    public function index()
    {
        return view('english.profile.index');
    }

    public function uploadProfileImage(Request $request)
    {
        $validation = Validator::make($request->all(),
        [
            'profile_picture' => 'required|image|mimes:jpeg,bmp,png,jpg',
        ]);

        if($validation->passes())
        {
            $user = User::find(Auth::user()->id);
            if(request()->hasFile('profile_picture'))
            {
                $file=$request['profile_picture'];
                $name =  date('mdYHis') . uniqid() . $file->getClientOriginalName();
                $name = str_replace(' ', '_', $name);
                $request->file('profile_picture')->move('uploads/profile/images/', $name);
                $user->image='uploads/profile/images/'.$name;
                $user->save();
            }

            return response()->json([
                'status' => 1,
                'type' => 'success',
                'title' => 'Success',
                'message' => 'Image Uploaded Susscessfully!',
            ]);


        }
        return response()->json([
            'status' => 0,
            'type' => 'error',
            'title' => 'Error',
            'message' => 'Check File Extension. allowed extension jpeg,png,jpg,bmp',
        ]);


    }
}
