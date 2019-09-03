<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;
use Validator;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();

        return view('admin.categories.index')
        ->with('categories', $categories)
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
            'title' => 'required|max:51|min:3|unique:categories,title',
        ]);

        if($validation->passes())
        {
            $category= new Category;
            $category->title = $request->title;
            $category->slug = str_slug($request->title, '-');
            $category->save();

            return response()->json([
                'message'         => 'category saved Successfully',
                'errors'          => '',
                'category_id'       => $category->id,
                'category_title'    => $category->title,
                'category_link_edit'=> route('admin.categories.edit', [$category->id]),
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
        $current = Category::find($id);

        return view('admin.categories.edit')
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
        $category =  Category::find($id);
        if($request->title != $category->title)
        {
            $validation = Validator::make($request->all(),
            [
                'title'      => 'required|max:51|min:3|unique:categories,title',
            ]);
        }
        else
        {
            $validation = Validator::make($request->all(),
            [
                'title'      => 'required|max:51|min:3',
            ]);
        }

        if($validation->passes())
        {

            $category= Category::find($id);
            $category->title = $request->title;
            $category->slug = trimString($request->title);
            $category->save();

            return response()->json([
                'message'        => 'category saved Successfully',
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
        $category= Category::find($id);
        $category->delete();
        return response()->json(array('id' => $id), 200);
    }
}
