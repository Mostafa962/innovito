<?php

namespace App\Http\Controllers\admin;

use App\Models\Branch;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;

class BranchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $branches = Branch::all();

        return view('admin.branches.index')
        ->with('branches', $branches)
        ->with('counter', 1);
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
        $validation = Validator::make($request->all(),
        [
            'title' => 'required|max:51|min:3',
        ]);

        if($validation->passes())
        {
            $branch= Branch::create($request->all());

            return response()->json([
                'message'         => 'branch saved Successfully',
                'errors'          => '',
                'branch_id'       => $branch->id,
                'branch_title'    => $branch->title,
                'branch_link_edit'=> route('admin.branches.edit', [$branch->id]),
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

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $current = Branch::find($id);

        return view('admin.branches.edit')
        ->with('current', $current)
        ->with('counter', 1);
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
            'title' => 'required|max:51|min:3',
        ]);

        if($validation->passes())
        {

            $branch= Branch::find($id)->update($request->all());

            return response()->json([
                'message'        => 'branch saved Successfully',
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

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $branch= Branch::find($id);
        $branch->delete();
        return response()->json(array('id' => $id), 200);
    }
}
