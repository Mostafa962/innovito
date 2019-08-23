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

    public function showPersonalInfo()
    {
        return view('english.profile.settings.personal_info');
    }

    public function editPassword()
    {
        return view('english.profile.settings.password');
    }

    public function editEducation()
    {
        return view('english.profile.settings.education');
    }

    public function about()
    {
        return view('english.profile.about');
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
                unlink($user->image);
                $user->image='uploads/profile/images/'.$name;
                $user->save();
            }

            return response()->json([
                'status' => 1,
                'type' => 'success',
                'title' => 'Success',
                'message' => 'Image Uploaded Susscessfully!',
                'image' => asset('') . $user->image,
            ]);


        }
        return response()->json([
            'status' => 0,
            'type' => 'error',
            'title' => 'Error',
            'message' => 'Check File Extension. allowed extension jpeg,png,jpg,bmp',
        ]);


    }

    public function uploadProfileHeaderImage(Request $request)
    {
        $validation = Validator::make($request->all(),
        [
            'header_picture' => 'required|image|mimes:jpeg,bmp,png,jpg',
        ]);
        if($validation->passes())
        {
            $user = User::find(Auth::user()->id);
            if(request()->hasFile('header_picture'))
            {
                $file=$request['header_picture'];
                $name =  date('mdYHis') . uniqid() . $file->getClientOriginalName();
                $name = str_replace(' ', '_', $name);
                $request->file('header_picture')->move('uploads/profile/images/', $name);
                unlink($user->header_image);
                $user->header_image='uploads/profile/images/'.$name;
                $user->save();
            }

            return response()->json([
                'status' => 1,
                'type' => 'success',
                'title' => 'Success',
                'message' => 'Image Uploaded Susscessfully!',
                'image' => asset('') . $user->header_image,
            ]);


        }
        return response()->json([
            'status' => 0,
            'type' => 'error',
            'title' => 'Error',
            'message' => 'Check File Extension. allowed extension jpeg,png,jpg,bmp',
            ]);


    }

    public function updatePersonalInfo(Request $request)
    {
        if($request->email != Auth::user()->email)
        {
            $validation = Validator::make($request->all(),
            [
                'email' => 'unique:users,email',
            ]);
        }
        else{
            $validation = Validator::make($request->all(),
            [
            ]);

        }
        if($validation->passes())
        {
            $form_data = $request->all();
            $form_data['birthday'] = $request->datetimepicker;
            $form_data['name'] = $request->first_name . ' ' . $request->last_name;

            $user= User::find(Auth::user()->id)->update($form_data);
            if($user)
            {
                return response()->json([
                    'status' => 1,
                    'type' => 'success',
                    'title' => 'Success',
                    'message' => 'Profile Personal Info is updated successfully.',
                ]);

            }
            return response()->json([
                'status' => 0,
                'type' => 'error',
                'title' => 'Error',
                'message' => 'Duplicate Email.',
            ]);

        }
        return response()->json([
            'status' => 0,
            'type' => 'error',
            'title' => 'Error',
            'message' => 'Duplicate Email.',
        ]);

    }

    public function updatePassword(Request $request)
    {
        if(Auth::attempt(['email' => Auth::user()->email, 'password' => $request->password]))
        {
            $validation = Validator::make($request->all(),
            [
                'new_password' => 'required',
                'new_password_confirm' => 'required|same:new_password',
            ]);

            if($validation->passes())
            {
                $user = User::find(Auth::user()->id);
                $user->password = bcrypt($request->new_password);
                if($user->save())
                {
                    return response()->json([
                        'status' => 1,
                        'type' => 'success',
                        'title' => 'Success',
                        'message' => 'Password is updated successfully.',
                    ]);
                }
            }
            return response()->json([
                'status' => 0,
                'type' => 'error',
                'title' => 'Error',
                'message' => "New Password isn't the same.",
            ]);


        }
        return response()->json([
            'status' => 0,
            'type' => 'error',
            'title' => 'Error',
            'message' => 'Current password is wrong',
        ]);
    }

}
