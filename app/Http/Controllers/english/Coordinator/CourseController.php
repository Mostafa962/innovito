<?php

namespace App\Http\Controllers\english\Coordinator;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Course\CourseStoreRequest;
use App\Models\Category;
use App\Models\CompletionCriteria;
use App\Models\CourseType;
use App\Models\Course;
use Auth;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $course_types = CourseType::all();
        $completion_criterias = CompletionCriteria::all();
        $categories = Category::all();

        return view('english.coordinator.course.index')
        ->with('course_types', $course_types)
        ->with('completion_criterias', $completion_criterias)
        ->with('categories', $categories);
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
    public function store(CourseStoreRequest $request)
    {
        $file = $request['image'];
        $name =  date('mdYHis') . uniqid() . $file->getClientOriginalName();
        $name = str_replace(' ', '_', $name);
        $request->file('image')->move('uploads/course/images/', $name);

        $modifiedRequestData = $request->all();
        $modifiedRequestData['image'] = 'uploads/course/images/'.$name;
        $modifiedRequestData['user_id'] = Auth::user()->id;
        $modifiedRequestData['slug']   = str_slug($request->title, '-');

        $course = Course::Create($modifiedRequestData);

        return response()->json([
            'swal' => [
                'status' => 1,
                'type' => 'success',
                'title' => 'Success',
                'message' => 'Course Created Susscessfully!',
            ],
            'route' => route('en.coordinator.courses.show', [$course->slug])
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        return Course::where('slug', $slug)->first();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
