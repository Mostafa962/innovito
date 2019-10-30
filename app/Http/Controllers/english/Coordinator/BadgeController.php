<?php

namespace App\Http\Controllers\english\Coordinator;

use App\Models\Badge;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\BadgeType;
use Auth;

class BadgeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $badge_types = BadgeType::all();

        return view('english.coordinator.badge.index')
        ->with('badge_types', $badge_types);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $file = $request['image'];
        $name =  date('mdYHis') . uniqid() . $file->getClientOriginalName();
        $name = str_replace(' ', '_', $name);
        $request->file('image')->move('uploads/badge/images/', $name);

        $modifiedRequestData = $request->all();
        $modifiedRequestData['image'] = 'uploads/badge/images/'.$name;
        $modifiedRequestData['user_id'] = Auth::user()->id;

        $badge = Badge::create($modifiedRequestData);

        return response()->json([
            'swal' => [
                'status' => 1,
                'type' => 'success',
                'title' => 'Success',
                'message' => 'Badge Created Susscessfully!',
            ],
            'route' => route('en.coordinator.badges.index')
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Badge  $badge
     * @return \Illuminate\Http\Response
     */
    public function show(Badge $badge)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Badge  $badge
     * @return \Illuminate\Http\Response
     */
    public function edit(Badge $badge)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Badge  $badge
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Badge $badge)
    {
        if($request->file('image'))
        {
            unlink($badge->image);
            $file = $request['image'];
            $name =  date('mdYHis') . uniqid() . $file->getClientOriginalName();
            $name = str_replace(' ', '_', $name);
            $request->file('image')->move('uploads/badge/images/', $name);
        }

        $modifiedRequestData = $request->all();
        if($request->file('image')) $modifiedRequestData['image'] = 'uploads/badge/images/'.$name;
        $modifiedRequestData['user_id'] = Auth::user()->id;

        $badge = Badge::find($badge->id)->update($modifiedRequestData);

        return response()->json([
            'swal' => [
                'status' => 1,
                'type' => 'success',
                'title' => 'Success',
                'message' => 'Badge Updated Susscessfully!',
            ],
            'route' => route('en.coordinator.badges.index')
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Badge  $badge
     * @return \Illuminate\Http\Response
     */
    public function destroy(Badge $badge)
    {
        unlink($badge->image);
        $badge->delete();
        
        return response()->json([
            'swal' => [
                'status' => 1,
                'type' => 'success',
                'title' => 'Success',
                'message' => 'Badge Deleted Susscessfully!',
            ],
            'route' => route('en.coordinator.badges.index')
        ]);

    }
}
