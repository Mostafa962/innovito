<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Setting;
use App\Models\Media;
use Validator;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $media = Media::all();
        $settings = Setting::first();

        return view('admin.settings.index1')
        ->with('current', $settings)
        ->with('media', $media);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validation = Validator::make($request->all(),
        [
            'website_title' => 'required|max:51|min:3',
            'logo_id' => 'required',
            'fav_id' => 'required',
            'default_image_employee_id' => 'required',
            'default_image_coordinator_id' => 'required',
            'default_header_employee_id' => 'required',
            'default_header_coordinator_id' => 'required',
        ]);

        if($validation->passes())
        {
            $setting= Setting::find($id)->update($request->all());
            return response()->json([
                'message'        => 'Settings saved Successfully',
                'errors'         => '',
            ]);
        }
        else
        {
            return response()->json([
                'message' => '',
                'errors'  => $validation->errors()->all(),
            ]);
        }
    }

}
