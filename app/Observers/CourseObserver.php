<?php

namespace App\Observers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseObserver
{
    protected $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    /**
     * Handle the course "created" event.
     *
     * @param  \App\Models\Course  $course
     * @return void
     */
    public function created(Course $course)
    {
        if($this->request->has('employees'))
        {
            $employees_ids = $this->request->employees;
            $course->users()->attach($employees_ids);
        }
    }

    /**
     * Handle the course "updated" event.
     *
     * @param  \App\Models\Course  $course
     * @return void
     */
    public function updated(Course $course)
    {
        //
    }

    /**
     * Handle the course "deleted" event.
     *
     * @param  \App\Models\Course  $course
     * @return void
     */
    public function deleted(Course $course)
    {
        //
    }

    /**
     * Handle the course "restored" event.
     *
     * @param  \App\Models\Course  $course
     * @return void
     */
    public function restored(Course $course)
    {
        //
    }

    /**
     * Handle the course "force deleted" event.
     *
     * @param  \App\Models\Course  $course
     * @return void
     */
    public function forceDeleted(Course $course)
    {
        //
    }
}
